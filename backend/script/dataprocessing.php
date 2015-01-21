<?php
add_action( 'wp_ajax_loan_grid','loan_grid_callback');

function loan_grid_callback()
{

global $wpdb;
 
 $aColumns = array(  'user_id', 'bank_name', 'years_bank', 'created_at', 'updated_at'); 
 $sIndexColumn = "id"; 
 $sTable = $wpdb->prefix."banking_infos";
 
 $sLimit = "";
 if ( isset( $_REQUEST['iDisplayStart'] ) && $_REQUEST['iDisplayLength'] != '-1' )
 {
  $sLimit = "LIMIT ".intval( $_REQUEST['iDisplayStart'] ).", ".
   intval( $_REQUEST['iDisplayLength'] );
 }
 
 $sOrder = "";
 if ( isset( $_REQUEST['iSortCol_0'] ) )
 {
  $sOrder = "ORDER BY  ";
  for ( $i=0 ; $i<intval( $_REQUEST['iSortingCols'] ) ; $i++ )
  {
   if ( $_REQUEST[ 'bSortable_'.intval($_REQUEST['iSortCol_'.$i]) ] == "true" )
   {
    $sOrder .= "`".$aColumns[ intval( $_REQUEST['iSortCol_'.$i] ) ]."` ".
     ($_REQUEST['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", ";
   }
  }
  
  $sOrder = substr_replace( $sOrder, "", -2 );
  if ( $sOrder == "ORDER BY" )
  {
   $sOrder = "";
  }
 }
 
 $sWhere = "";
 if ( isset($_REQUEST['sSearch']) && $_REQUEST['sSearch'] != "" )
 {
  $sWhere = "WHERE (";
  for ( $i=0 ; $i<count($aColumns) ; $i++ )
  {
   $sWhere .= "`".$aColumns[$i]."` LIKE '%".esc_sql( $_REQUEST['sSearch'] )."%' OR ";
  }
  $sWhere = substr_replace( $sWhere, "", -3 );
  $sWhere .= ')';
 }
  
 for ( $i=0 ; $i<count($aColumns) ; $i++ )
 {
  if ( isset($_REQUEST['bSearchable_'.$i]) && $_REQUEST['bSearchable_'.$i] == "true" && $_REQUEST['sSearch_'.$i] != '' )
  {
   if ( $sWhere == "" )
   {
    $sWhere = "WHERE ";
   }
   else
   {
    $sWhere .= " AND ";
   }
   $sWhere .= "`".$aColumns[$i]."` LIKE '%".esc_sql($_REQUEST['sSearch_'.$i])."%' ";
  }
 }
 
 $sQuery = "
  SELECT SQL_CALC_FOUND_ROWS `".str_replace(" , ", " ", implode("`, `", $aColumns))."`
  FROM   $sTable
  $sWhere
  $sOrder
  $sLimit
  ";
 $rResult = $wpdb->get_results($sQuery, ARRAY_A);
 
 $sQuery = "
  SELECT FOUND_ROWS()
 ";
 $rResultFilterTotal = $wpdb->get_results($sQuery, ARRAY_N); 
 $iFilteredTotal = $rResultFilterTotal [0];
 
 $sQuery = "
  SELECT COUNT(`".$sIndexColumn."`)
  FROM   $sTable
 ";
 $rResultTotal = $wpdb->get_results($sQuery, ARRAY_N); 
 $iTotal = $rResultTotal [0];
 
 $output = array(
  "sEcho" => intval($_REQUEST['sEcho']),
  "iTotalRecords" => $iTotal,
  "iTotalDisplayRecords" => $iFilteredTotal,
  "aaData" => array()
 );
 
 foreach($rResult as $aRow)
 {
  $row = array();
  for ( $i=0 ; $i<count($aColumns) ; $i++ )
  {
   if ( $aColumns[$i] == "version" )
   {    
    $row[] = ($aRow[ $aColumns[$i] ]=="0") ? '-' : $aRow[ $aColumns[$i] ];
   }
   else if ( $aColumns[$i] != ' ' )
   {    
    $row[] = $aRow[ $aColumns[$i] ];
   }
  }
  $output['aaData'][] = $row;
 }
 
 echo json_encode( $output );
 die(); 
}

?>