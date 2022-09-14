"use strict";
var KTDatatablesAdvancedMultipleControls = function() {

	var initTable1 = function() {
		var table = $('.kt_table_1');

		// begin first table
		table.DataTable({
			// DOM Layout settings
			dom:
				"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
				"<'row'<'col-sm-12 col-md-4'i><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'p>>" +
				"<'row'<'col-sm-12'tr>>" +
				"<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6'p>>", // read more: https://datatables.net/examples/basic_init/dom.html
            columnDefs: [
                {
                    targets: -1,
                    title: 'Delete',
                    orderable: false,
                },
                {
                    targets: -2,
                    title: 'Actions',
                    orderable: false,
                },
                ],
            buttons: [
                'print',
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
            ],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();

		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesAdvancedMultipleControls.init();
});
