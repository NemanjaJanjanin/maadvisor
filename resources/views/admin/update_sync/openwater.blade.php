@extends('layouts.app')
@section('other_css')
    <link href="{{ asset('resources/assets/admin_assets/admin/') }}/all_contact.css" rel="stylesheet" type="text/css" />
@stop
@section('content')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">OpenWater Contact Data</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="{{ url('home') }}" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <span class="m-nav__link-text">Update & Sync -</span>
                </li>
                <li class="m-nav__item">
                    <a href="{{ url('update_sync/openwater') }}" class="m-nav__link">
                        <span class="m-nav__link-text">OpenWater</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- END: Subheader -->
<div class="m-content">

    <div class="row">
        <div class="col-xl-12">

          <!--begin:: Widgets/Tasks -->
          <div class="m-portlet m-portlet--full-height ">
            <div class="m-portlet__head">
              <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                  <h3 class="m-portlet__head-text">
                    Contact List
                  </h3>
                </div>
              </div>
              <div class="m-portlet__head-tools">
            		<ul class="m-portlet__nav">
            			<li class="m-portlet__nav-item">
            				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_modal_upload_csv">Upload CSV</button>
            			</li>
            		</ul>
            	</div>
            </div>
            <div class="m-portlet__body">
              <div class="tab-content">
                <div class="tab-pane active" id="m_widget2_tab1_content">
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="m_openwater_contact_list">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Company</th>
                                <th>Job Title</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

</div>
<div class="modal fade" id="m_modal_upload_csv" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form class="m-form m-form--fit m-form--label-align-left" id="sync_openwater_form" action="{{url('/update_sync/openwater_sync_csv')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Upload & Sync Contact Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Upload a CSV file downloaded from OpenWater to update and synchronize the contact database. If you want to know how to download the CSV file having all applicant list from OpenWater, click <a target="_blank" href="https://help.getopenwater.com/export-data-and-download-files/applicant-and-judge-profiles/search-update-and-export-your-applicant-profile-data">here</a>.</p>
          <div class="form-group m-form__group">
              <div class="custom-file">
                  <input type="file" class="custom-file-input" name="csv_file">
                  <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('other_js')
    <script src="{{ asset('resources/assets/admin_assets/assets/vendors/custom/datatables/') }}/datatables.bundle.js" type="text/javascript"></script>
    <script src="{{ asset('resources/assets/js/admin/contact/') }}/openwater_list.js" type="text/javascript"></script>
@stop
