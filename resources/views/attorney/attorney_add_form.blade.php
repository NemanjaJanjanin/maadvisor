@extends('layouts.app')

@section('other_css')
@stop

@section('content')
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Attorney Profile</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="{{ url('home') }}" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="{{ url('search_all') }}" class="m-nav__link">
                        <span class="m-nav__link-text">All Data</span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">Attorney Profile</span>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <div class="col-lg-12">
                <button class="btn btn-brand m-btn m-btn--icon" id="m_submit">
                    <span>
                        <span>Submit</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- END: Subheader -->
<div class="m-content">
    <form class="m-form m-form--fit m--margin-bottom-20" id="attorney_form" action="{{url('/attorney_profile_add')}}" method="post">
        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
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
                                    Personal Information
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Record ID</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="id" readonly>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">First Name</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="first_name">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Middle Name</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="middle_name">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Last Name</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="last_name">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Full Name</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="full_name">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Salutation</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="salutation">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Prefix</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="prefix">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Suffix</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="suffix">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Birthday</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control" attr_id="date" name="birthday" placeholder="Select date" />
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Email</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="email">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Address 1</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="address1">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Address 2</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="address2">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Address 3</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="address3">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">City</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="city">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">City 2</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="city2">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">State</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="state">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">State 2</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="state2">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">County</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="county">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Counties</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="counties">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Country</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="country">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">District</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="district">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Zip code</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="zipcode">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Zip code 2</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="zipcode2">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Phone Number</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="phone">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Toll Free</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="toll_free">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Fax</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="fax">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Website</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="website">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Source URL</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="source_url">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Admitted at 1</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control" attr_id="date" name="admitted_at_1" placeholder="Select date" />
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Admitted at 2</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control" attr_id="date" name="admitted_at_2" placeholder="Select date" />
                            </div>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Description</label>
                            <textarea class="form-control m-input m-input--air" name="description" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                <!--end::Personal Information-->

                <!--begin::Education Information-->
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                </span>
                                <h3 class="m-portlet__head-text">
                                    Education Information
                                </h3>
                            </div>
                        </div>
                    </div>

                    <!--begin::Form-->

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Education</label>
                            <textarea class="form-control m-input m-input--air" name="education" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Graduated year</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="number" name="graduated_at">
                            </div>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Undergraduated School</label>
                            <textarea class="form-control m-input m-input--air" name="undergraduated_school" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                <!--end::Education Information-->

                <!--begin::Links-->
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                </span>
                                <h3 class="m-portlet__head-text">
                                    Links
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Image URL</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="image_url">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Review URL</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="review_url">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Contributions URL</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="contributions_url">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Facebook</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="facebook">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Twitter</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="twitter">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Google+</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="google_plus">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Linkedin</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="linkedin">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Social Tools 1</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="social_tools_url1">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Social Tools 2</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="social_tools_url2">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Social Tools 3</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="social_tools_url3">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Social Tools 4</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="social_tools_url4">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">About me</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="about_me_url">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Endorsements URL</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="endorsements_url">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Peer Endorsements URL</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="peer_endorsements_url">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Cases URL</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="cases_url">
                            </div>
                        </div>
                    </div>
                </div>

                <!--end::Links-->

            </div>

            <div class="col-md-6">
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                </span>
                                <h3 class="m-portlet__head-text">
                                    Business Information
                                </h3>
                            </div>
                        </div>
                    </div>

                    <!--begin::Form-->

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Business Name</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="business_name">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Office Phone Number</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="business_phone">
                            </div>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Practice Area</label>
                            <textarea class="form-control m-input m-input--air" name="practice_area" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Focus Area</label>
                            <textarea class="form-control m-input m-input--air" name="focus_area" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Practice States</label>
                            <textarea class="form-control m-input m-input--air" name="practice_states" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Practice Countries</label>
                            <textarea class="form-control m-input m-input--air" name="practice_countries" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Member Class</label>
                            <textarea class="form-control m-input m-input--air" name="member_class" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Member Since</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control" attr_id="date" name="member_since" placeholder="Select date" />
                            </div>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Member Status</label>
                            <textarea class="form-control m-input m-input--air" name="member_status" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Bar Number</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="bar_number">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Registration Number</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="registration_number">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">BPR Number</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="bpr_number">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">WSBA Number</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="wsba_number">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Overseers Number</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="overseers_number">
                            </div>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Languages</label>
                            <textarea class="form-control m-input m-input--air" name="languages" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Languages in Office</label>
                            <textarea class="form-control m-input m-input--air" name="languages_law_office" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Profession</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="profession">
                            </div>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Bar Information</label>
                            <textarea class="form-control m-input m-input--air" name="bar_info" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Rating</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="rating">
                            </div>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Fee Payment Type</label>
                            <textarea class="form-control m-input m-input--air" name="fee_payment_type" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Employer</label>
                            <textarea class="form-control m-input m-input--air" name="employer" rows="3"></textarea>
                        </div>

                    </div>
                </div>
                <div class="m-portlet m-portlet--tab">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <span class="m-portlet__head-icon m--hide">
                                    <i class="la la-gear"></i>
                                </span>
                                <h3 class="m-portlet__head-text">
                                    Others
                                </h3>
                            </div>
                        </div>
                    </div>

                    <!--begin::Form-->

                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Contributions Count</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="contributions_count">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Contact Info 2</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="contact_info2">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Contact Info 3</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="contact_info3">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Contact Info 4</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="contact_info4">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Client Reviews</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="client_reviews">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Endorsements Count</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="endorsements_count">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Peer Endorsements Comment</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="peer_endorsements_comment">
                            </div>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">License</label>
                            <textarea class="form-control m-input m-input--air" name="license" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Work Experience</label>
                            <textarea class="form-control m-input m-input--air" name="work_experience" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Awards</label>
                            <textarea class="form-control m-input m-input--air" name="awards" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Associations</label>
                            <textarea class="form-control m-input m-input--air" name="associations" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Contribution</label>
                            <textarea class="form-control m-input m-input--air" name="contribution" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Cases</label>
                            <textarea class="form-control m-input m-input--air" name="cases" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Publications</label>
                            <textarea class="form-control m-input m-input--air" name="publications" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Speaking Engagements</label>
                            <textarea class="form-control m-input m-input--air" name="speaking_engagements" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Section Membership</label>
                            <textarea class="form-control m-input m-input--air" name="section_membership" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Other Jurisdictions</label>
                            <textarea class="form-control m-input m-input--air" name="other_jurisdictions" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">History</label>
                            <textarea class="form-control m-input m-input--air" name="history" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Certified Speciality</label>
                            <textarea class="form-control m-input m-input--air" name="certified_speciality" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Disciplinary Related Action</label>
                            <textarea class="form-control m-input m-input--air" name="disciplinary_related_action" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Administrative Action</label>
                            <textarea class="form-control m-input m-input--air" name="administrative_action" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Position Held</label>
                            <textarea class="form-control m-input m-input--air" name="position_held" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Reason For Suspension</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="reason_for_suspension">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Judicial Position</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="judicial_position">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Firm Size</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="firm_size">
                            </div>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Committees</label>
                            <textarea class="form-control m-input m-input--air" name="committees" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Advanced Degree</label>
                            <textarea class="form-control m-input m-input--air" name="advanced_degree" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Services</label>
                            <textarea class="form-control m-input m-input--air" name="services" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Federal Courts</label>
                            <textarea class="form-control m-input m-input--air" name="federal_courts" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Paris</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="paris">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Board District</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="board_district">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Judical District</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="judical_district">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-lg-3 col-sm-12">Effective Date</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <input type="text" class="form-control" attr_id="date" name="effective_date" placeholder="Select date" />
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Case Number</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="case_number">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Disciplinary Related Action 2</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="disciplinary_related_action2">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-date-input" class="col-3 col-form-label">Effective Date 2</label>
                            <div class="col-9">
                                <input class="form-control m-input" attr_id="date" name="effective_date2">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Case Number 2</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="case_number2">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Case Number 2</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="case_number2">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Disciplinary Related Action 3</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="disciplinary_related_action3">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-date-input" class="col-3 col-form-label">Effective Date 3</label>
                            <div class="col-9">
                                <input class="form-control m-input" attr_id="date" name="effective_date3">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Case Number 3</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="case_number3">
                            </div>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Locations</label>
                            <textarea class="form-control m-input m-input--air" name="locations" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Information Release</label>
                            <textarea class="form-control m-input m-input--air" name="information_release" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Used Name</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="name_used">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">TDD</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="tdd">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label">Public Discipline</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="text" name="public_discipline">
                            </div>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="exampleTextarea">Social Volunteer_Organization</label>
                            <textarea class="form-control m-input m-input--air" name="social_volunteer_organization" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-9 col-form-label">Appellate Division Department of Admission</label>
                            <div class="col-3">
                                <input class="form-control m-input" type="number" name="appellate_division_department">
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label for="example-date-input" class="col-3 col-form-label">Circuit Court</label>
                            <div class="col-9">
                                <input class="form-control m-input" type="date" name="circuit_court">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('other_js')
<script>
        $(document).ready(function(){
            var date_input=$('input[attr_id="date"]');
            //var date_input=$('input[name="date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            });
        });

        $("#m_submit").click(function(){
            $("#attorney_form").submit();
        });
</script>
@stop
