$(function(e) {
	//file export datatable
	var table = $('#example').DataTable( {
		lengthChange: false,
		buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
	} );
	table.buttons().container()
		.appendTo( '#example_wrapper .col-md-6:eq(0)' );
		
	//sample datatable	
	$('#example-2').DataTable();
	$('#example-3').DataTable();
	$('#example-4').DataTable();
	$('#example-5').DataTable();
	$('#example-6').DataTable();
	$('#example-7').DataTable();
	$('#example-8').DataTable();
	$('#example-9').DataTable();
	$('#example-10').DataTable();

	//Details display datatable
	$('#example-1').DataTable( {
		responsive: {
			details: {
				display: $.fn.dataTable.Responsive.display.modal( {
					header: function ( row ) {
						var data = row.data();
						return 'Details for '+data[0]+' '+data[1];
					}
				} ),
				renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
					tableClass: 'table'
				} )
			}
		}
	} );

} );