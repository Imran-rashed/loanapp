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
	
    jQuery('#example').DataTable(
	{
        "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": ajaxurl+'?action=loan_grid',		
		
		
    }
	);
} );
	</script>