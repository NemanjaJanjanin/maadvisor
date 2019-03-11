@extends('layouts.app')

@section('other_css')
@stop

@section('content')
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">User Role</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="{{ url('home') }}" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="{{ url('user_role') }}" class="m-nav__link">
                        <span class="m-nav__link-text">User - Add New User</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- END: Subheader -->
<div class="m-content">
  <div class="row">
      <div class="col-md-6">
        <!--begin::Personal Information-->
        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            New User's Information
                        </h3>
                    </div>
                </div>
            </div>

            <form class="m-form m-form--fit m-form--label-align-left" id="submit_new_user_form" action="{{url('/submit_new_user')}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                <div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Full Name" name="fullname">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
@endsection

@section('other_js')

@stop
