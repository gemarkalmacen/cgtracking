"use strict";
var KTDatatablesExtensionsResponsive = function() {

	var initTable1 = function() {
		var table = $('.kt_datatable');
		var vm = this;

		// begin first table
		table.DataTable({
			responsive: true,
			columnDefs: [
				{
					width: '150px',
					targets: 0
				},
				{
					targets: 13,
					title: 'Action',
					orderable: false,
					render: function(data, type, full, meta) {
                                        
						return `
							<div class="dropdown dropdown-inline">\
									<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">\
										<ul class="nav nav-hoverable flex-column">\
											<li class="nav-item"><a class="nav-link"><i class="nav-icon la la-edit"></i><span class="nav-text">Edit Details</span></a></li>\
										</ul>\
									</div>\
							</div>\
								<a href="/staff-panel/emvvalidationdetailsothercard?id=${data}" class="btn btn-sm btn-clean btn-icon" title="Edit details">\    
									<i class="la la-edit"></i>\
								</a>\
								`;
					},
				},
				{
					width: '75px',
					targets: 16,
					render: function(data, type, full, meta) {
						var status = {
							1: {'title': 'Pending', 'class': 'label-light-primary'},
							2: {'title': 'Delivered', 'class': ' label-light-danger'},
							3: {'title': 'Canceled', 'class': ' label-light-primary'},
							4: {'title': 'Success', 'class': ' label-light-success'},
							5: {'title': 'Info', 'class': ' label-light-info'},
							6: {'title': 'Danger', 'class': ' label-light-danger'},
							7: {'title': 'Warning', 'class': ' label-light-warning'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
					},
				},
				// {
				// 	width: '75px',
				// 	targets: 17,
				// 	render: function(data, type, full, meta) {
				// 		var status = {
				// 			1: {'title': 'Online', 'state': 'danger'},
				// 			2: {'title': 'Retail', 'state': 'primary'},
				// 			3: {'title': 'Direct', 'state': 'success'},
				// 		};
				// 		if (typeof status[data] === 'undefined') {
				// 			return data;
				// 		}
				// 		return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
				// 			'<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
				// 	}
				// }
			]
		});
	};

	return {
		//main function to initiate the module
		init: function() {
			initTable1();
		}
	};
}();

setTimeout(function(){
	KTDatatablesExtensionsResponsive.init();

}, 500); 

// KTDatatablesExtensionsResponsive.init();



// jQuery(document).ready(function() {
// 	KTDatatablesExtensionsResponsive.init();
// });
