<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>User Id</th>
                <th>Bank Name</th>
                <th>Years Bank</th>
                <th>Created At</th>                
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>User Id</th>
                <th>Bank Name</th>
                <th>Years Bank</th>
                <th>Created At</th> 
            </tr>
        </tfoot>
    </table>
    <script>
	jQuery(document).ready(function() {	
	
	
	var ajaxurl = "<?php echo admin_url( 'admin-ajax.php', 'relative' );?>";
	
	
	function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Bank name:</td>'+
            '<td>'+d.bank_name+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Years At Bank:</td>'+
            '<td>'+d.years_bank+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extra info:</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
    '</table>';
	}
	
	
	
	
    jQuery('#example').DataTable(
	{
        "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": ajaxurl+'?action=loan_grid',
		
		/*"columns": [
            {
                //"class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": "hello",
				"style":''
            },
			{ "data": "user_id" },
            { "data": "bank_name" },
            { "data": "years_bank" },
            { "data": "created_at" },
        ],
		*/
		
		"order": [[1, 'desc']]		
		
    }
	);
	
	
	// Add event listener for opening and closing details
    jQuery('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
	
	
	
	
	
} );
	</script>