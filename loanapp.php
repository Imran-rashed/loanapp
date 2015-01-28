<?php

/**
 * Plugin Name: Car Loan Application.
 * Plugin URI: http://bloodsoft.org/plugin/loanapp
 * Description: A car loan application plugin.
 * Version: 1.0.0
 * Author: Bloodsoft
 * Author URI: http://bloodsoft.org
 */

defined('ABSPATH') or die("No script kiddies please!");

global $loan_app_version;
$loan_app_version = '1.0';


register_activation_hook( __FILE__, 'loanapp_activate' );

function loanapp_activate()
{
global $wpdb;
$charset_collate = $wpdb->get_charset_collate();
include('data/data.php');
//add_option( 'loan_app_version', $loan_app_version );
}

add_action('admin_menu', 'loanapp_admin_actions');

function loanapp_admin_actions(){
add_options_page('Loan Application', 'Loan Application', 'manage_options', __FILE__, 'loanapp_admin' );
}

function loanapp_admin()
{
wp_enqueue_script( 'jquerydataTablesminjs', plugins_url( '/js/jquery.dataTables.min.js', __FILE__ ));
wp_enqueue_style( 'jquerydataTablescss', plugins_url( '/css/jquery.dataTables.css', __FILE__ ) );
wp_enqueue_style( 'maincss', plugins_url( '/css/main.css', __FILE__ ) );
?>
<div style="margin-top:20px;">
<h3>This is my first custom plugin admin panel</h3>
<hr/>
<?php 
wp_enqueue_script('jquery-ui-datepicker');
include('backend/grid.php');
}

/* front-end part */

function loanapp_apply()
{

if(isset($_POST['loanapply']))
{
var_dump($_POST['Personal']);
}
wp_enqueue_script('jquery-ui-datepicker');
wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
ob_start(); 
include('frontend/loanapply.php');
return ob_get_clean();
//return $data;
}

add_shortcode('loanform', 'loanapp_apply');
/* end front-end part */
/* ajax grid */
include('backend/script/dataprocessing.php');
/* end ajax grid */

?>