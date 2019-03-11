@extends('layouts.app')

@section('other_css')
<link href="{{ asset('resources/assets/admin_assets/admin/') }}/all_contact.css" rel="stylesheet" type="text/css" />
@stop

@section('content')


    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">All Contact Data</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="{{ url('home') }}" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="{{ url('search_all') }}" class="m-nav__link">
                            <span class="m-nav__link-text">All Contact Data</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                        <i class="la la-plus m--hide"></i>
                        <i class="la la-ellipsis-h"></i>
                    </a>
                    <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                    <ul class="m-nav">
                                        <li class="m-nav__section m-nav__section--first m--hide">
                                            <span class="m-nav__section-text">Quick Actions</span>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="#" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-download"></i>
                                                <span class="m-nav__link-text">Download to CSV</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Contact Data
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="m-accordion m-accordion--default m-accordion--toggle-arrow" id="m_accordion_5" role="tablist">
					<!--begin::Item-->
					<div class="m-accordion__item m-accordion__item--brand">
						<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_5_item_3_head" data-toggle="collapse" href="#m_accordion_5_item_3_body" aria-expanded="    false">
							<span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
							<span class="m-accordion__item-title"> Search Form</span>
							<span class="m-accordion__item-mode"></span>
						</div>
						<div class="m-accordion__item-body collapse" id="m_accordion_5_item_3_body" role="tabpanel" aria-labelledby="m_accordion_5_item_3_head" data-parent="#m_accordion_5">
                            <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
                				<div class="m-portlet__body">
                					<div class="form-group m-form__group row">
                						<div class="col-lg-3">
                							<label>First Name:</label>
                							<input type="text" class="form-control m-input" name="first_name">
                                            <span class="m-form__help"></span>
                						</div>
                                        <div class="col-lg-3">
                							<label>Middle Name:</label>
                							<input type="text" class="form-control m-input" name="middle_name">
                                            <span class="m-form__help"></span>
                						</div>
                                        <div class="col-lg-3">
                							<label>Last Name:</label>
                							<input type="text" class="form-control m-input" name="last_name">
                                            <span class="m-form__help"></span>
                						</div>
                                        <div class="col-lg-3">
                							<label>Email:</label>
                							<input type="text" class="form-control m-input" name="email">
                                            <span class="m-form__help"></span>
                						</div>
                					</div>
                	            </div>
                	            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                					<div class="m-form__actions m-form__actions--solid">
                						<div class="row">
                							<div class="col-lg-4"></div>
                							<div class="col-lg-8">
                								<button type="reset" class="btn btn-primary">Submit</button>
                								<button type="reset" class="btn btn-secondary">Cancel</button>
                							</div>
                						</div>
                					</div>
                				</div>
                			</form>
						</div>
					</div>

					<!--end::Item-->
				</div>

                <span class="m-section__sub">Show / Hide Columns</span>
                <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
					<div class="m-demo__preview  m-demo__preview--btn">
                        <div class="m-checkbox-inline">
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="0" checked> Record ID
							<span></span>
							</label>
							<label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="1" checked> First Name
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="2" checked> Middle Name
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="3" checked> Last Name
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="4" checked> Email Address
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="5" checked> Date of Birth
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="6" checked> Company Name
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="7" checked> Title
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="8" checked> Mobile Phone
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="9" checked> Work Phone
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="10" checked> Other Phone
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="11" checked> Address
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="12" checked> Address1
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="13" checked> City
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="14" checked> State
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="15" checked> Zip
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="16" checked> Province
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="17" checked> Country
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="18" checked> Region
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="19" checked> Website
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="20" checked> Twitter
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="21" checked> Linkedin
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="22" checked> Facebook
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="23" checked> Whatsapp
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="24" checked> Opted in
							<span></span>
							</label>
                            <label class="m-checkbox">
							<input type="checkbox" class="toggle-vis" data-column="25" checked> Opted out
							<span></span>
							</label>
						</div>
					</div>
				</div>
                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                    <thead>
                        <tr>
                            <th>Record ID</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Date of Birth</th>
                            <th>Company Name</th>
                            <th>Title</th>
                            <th>Mobile Phone</th>
                            <th>Work Phone</th>
                            <th>Other Phone</th>
                            <th>Address</th>
                            <th>Address1</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Province</th>
                            <th>Country</th>
                            <th>Region</th>
                            <th>Website</th>
                            <th>Twitter</th>
                            <th>Linkedin</th>
                            <th>Facebook</th>
                            <th>Whatsapp</th>
                            <th>Opted in</th>
                            <th>Opted out</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Record ID</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Date of Birth</th>
                            <th>Company Name</th>
                            <th>Title</th>
                            <th>Mobile Phone</th>
                            <th>Work Phone</th>
                            <th>Other Phone</th>
                            <th>Address</th>
                            <th>Address1</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Province</th>
                            <th>Country</th>
                            <th>Region</th>
                            <th>Website</th>
                            <th>Twitter</th>
                            <th>Linkedin</th>
                            <th>Facebook</th>
                            <th>Whatsapp</th>
                            <th>Opted in</th>
                            <th>Opted out</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- END EXAMPLE TABLE PORTLET-->
    </div>

@endsection

@section('other_js')
<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
<script src="{{ asset('resources/assets/js/admin/contact/') }}/search-all.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
    var table = $('#m_table_1').DataTable();

    $('input.toggle-vis').on( 'click', function (e) {

        // Get the column API object
        var column = table.column( $(this).attr('data-column') );

        // Toggle the visibility
        column.visible( ! column.visible() );
    } );
} );
</script>
@stop
