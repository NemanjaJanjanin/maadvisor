var DatatablesSearchOptionsAdvancedSearch = function() {

	$.fn.dataTable.Api.register('column().title()', function() {
		return $(this.header()).text().trim();
	});

	var initTable1 = function() {
		// begin first table
		var table = $('#m_table_1').DataTable({
			bProcessing: true,
			responsive: true,
			pagingType : 'full_numbers',
			lengthMenu: [5, 10, 25, 50],
			pageLength: 10,
			language: {
				'lengthMenu': 'Display _MENU_',
			},
			searchDelay: 500,
			processing: true,
			serverSide: true,
			ajax: {
				url: 'http://localhost/maadvisor/api/get_contact_data',
				// url: 'http://maadvisor.us/api/get_contact_data',
				headers: {'X-MAA': '2*2wr)<w2Us#MaZ.'},
				type: 'POST',
			},
			columns: [
				{data : 'id'},
				{data : 'first_name'},
				{data : 'middle_name'},
				{data : 'last_name'},
				{data : 'email_address'},
				{data : 'date_of_birth'},
				{data : 'company_name'},
				{data : 'title'},
				{data : 'mobile_phone'},
				{data : 'work_phone'},
				{data : 'other_phone'},
				{data : 'address'},
				{data : 'address1'},
				{data : 'city'},
				{data : 'state'},
				{data : 'zip'},
				{data : 'province'},
				{data : 'country'},
				{data : 'region'},
				{data : 'website'},
				{data : 'twitter'},
				{data : 'linkedin'},
				{data : 'facebook'},
				{data : 'whatsapp'},
				{data : 'opted_in'},
				{data : 'opted_out'},
				{data : 'actions'}
			],
			columnDefs: [
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {
						// return `
                        // <a href="https://legalbranddata.com/attorney_profile/` + data + `" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View" target="_blank">
                        //   <i class="la la-edit"></i>
                        // </a>`;
						return `
                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View / Edit" target="_blank">
                          <i class="la la-edit"></i>
                        </a>`;
					},
				},
			],
		});

		var filter = function() {
			var val = $.fn.dataTable.util.escapeRegex($(this).val());
			table.column($(this).data('col-index')).search(val ? val : '', false, false).draw();
		};

		var asdasd = function(value, index) {
			var val = $.fn.dataTable.util.escapeRegex(value);
			table.column(index).search(val ? val : '', false, true);
		};

		$('#m_search').on('click', function(e) {
			e.preventDefault();
			var params = {};
			$('.m-input').each(function() {
				var i = $(this).data('col-index');
				if (params[i]) {
					params[i] += '|' + $(this).val();
				}
				else {
					params[i] = $(this).val();
				}
			});
			$.each(params, function(i, val) {
				// apply search params to datatable
				table.column(i).search(val ? val : '', false, false);
			});
			table.table().draw();
		});

		$('#m_reset').on('click', function(e) {
			e.preventDefault();
			$('.m-input').each(function() {
				$(this).val('');
				table.column($(this).data('col-index')).search('', false, false);
			});
			table.table().draw();
		});

		$('#m_datepicker').datepicker({
			todayHighlight: true,
			templates: {
				leftArrow: '<i class="la la-angle-left"></i>',
				rightArrow: '<i class="la la-angle-right"></i>',
			},
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
	DatatablesSearchOptionsAdvancedSearch.init();
});
