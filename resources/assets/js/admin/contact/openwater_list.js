var DatatablesSearchOptionsAdvancedSearch = function() {

	$.fn.dataTable.Api.register('column().title()', function() {
		return $(this.header()).text().trim();
	});

	var initTable1 = function() {
		// begin first table
		var table = $('#m_openwater_contact_list').DataTable({
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
				url: 'http://localhost/maadvisor/api/get_openwater_contact_data',
				// url: 'http://maadvisor.us/api/get_openwater_contact_data',
				headers: {'X-MAA': '2*2wr)<w2Us#MaZ.'},
				type: 'POST',
			},
			columns: [
				{data : 'email_address'},
				{data : 'first_name'},
				{data : 'last_name'},
				{data : 'company_name'},
				{data : 'title'},
				{data : 'mobile_phone'}
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
