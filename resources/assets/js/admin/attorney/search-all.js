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
				url: 'http://localhost/lbm/api/get_attorny_dataset',
				// url: 'https://legalbranddata.com/api/get_attorny_dataset',
				headers: {'X-LBM': '2*2wr)<w2Us#MaZ.'},
				type: 'POST',
			},
			columns: [
				{data: 'id'},
				{data: 'first_name'},
				{data: 'middle_name'},
				{data: 'last_name'},
				{data: 'suffix'},
				{data: 'email'},
				{data: 'address1'},
				{data: 'address2'},
				{data: 'address3'},
				{data: 'city'},
				{data: 'state'},
				{data: 'county'},
				{data: 'country'},
				{data: 'district'},
				{data: 'zipcode'},
				{data: 'phone'},
				{data: 'fax'},
				{data: 'website'},
				{data: 'business_name'},
				{data: 'business_phone'},
				{data: 'member_status'},
				{data: 'bar_number'},
				{data: 'practice_area'},
				{data: 'actions'},
			],
			columnDefs: [
				{
					targets: -1,
					title: 'actions',
					orderable: false,
					render: function(data, type, full, meta) {
						// return `
                        // <a href="https://legalbranddata.com/attorney_profile/` + data + `" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View" target="_blank">
                        //   <i class="la la-edit"></i>
                        // </a>`;
						return `
                        <a href="http://localhost/lbm/attorney_profile/` + data + `" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View / Edit" target="_blank">
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
