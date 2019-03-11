@extends('layouts.app')

@section('other_css')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('resources/assets/admin_assets/') }}/assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('resources/assets/admin_assets/') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
@stop

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="{{ url('/home') }}">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>User</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h1 class="page-title"> Profile Account
                <small>user account page</small>
            </h1>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet ">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                @if(!empty($user_info->avatar))
                                    <img src="{{ asset('public/uploads').'/'.$user_info->avatar }}" class="img-responsive" alt="">
                                @else
                                    <img src="{{ asset('resources/assets/admin_assets/') }}/assets/layouts/layout/img/no_avatar.png" class="img-responsive" alt="">
                                @endif
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> {{ $user_info->firstname.' '.$user_info->lastname }} </div>
                                <div class="profile-usertitle-job"> {{ $user_info->username }} </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                        </div>
                        <!-- END PORTLET MAIN -->
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light ">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                            </li>
                                            <!--<li>
                                                <a href="#tab_1_4" data-toggle="tab">Privacy Settings</a>
                                            </li>-->
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            @if (Session::has('succ'))
                                                <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    {!! session('succ') !!}
                                                </div>
                                            @endif

                                            @if (Session::has('error'))
                                                <div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    {!! session('error') !!}
                                                </div>
                                            @endif

                                            @if (Session::has('success'))
                                                <div class="alert alert-success alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    {!! session('success') !!}
                                                </div>
                                            @endif

                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <form role="form" id="updateProfileForm" action="{{url('/profile_update')}}" method="post">
                                                    <div class="form-group">
                                                        <label class="control-label">Email</label>
                                                        <input type="email" name="email" placeholder="Enter Email" value="{{ $user_info->email }}" class="form-control" required/>
                                                        <label class="error" for="email"></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">First Name</label>
                                                        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                                                        <input type="text" name="first_name" placeholder="Enter Firstname" value="{{ $user_info->firstname }}" class="form-control" />
                                                        <label class="error" for="first_name"></label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Last Name</label>
                                                        <input type="text" name="last_name" placeholder="Enter Lastname" value="{{ $user_info->lastname }}" class="form-control" />
                                                        <label class="error" for="last_name"></label>
                                                    </div>


                                                    <div class="margiv-top-10">
                                                        <!--<a href="javascript:;" class="btn green"> Save Changes </a>-->
                                                        <button type="submit" name="btnSubmit" class="btn green">Save Changes</button>
                                                        <!--<a href="javascript:;" class="btn default"> Cancel </a>-->
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->
                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                                    eiusmod. </p>
                                                <form id="updatePicForm" action="{{url('/profilepic_update')}}" enctype="multipart/form-data" method="post" role="form">
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                @if(!empty($user_info->avatar))
                                                                    <img src="{{ asset('public/uploads').'/'.$user_info->avatar }}" alt="" /> </div>
                                                                @else
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                @endif

                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new"> Select image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                                                                    <input type="file" name="profile_pic">
                                                                </span>
                                                                <br>
                                                                <label class="error" for="profile_pic"></label>
                                                                <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix margin-top-10">
                                                            <span class="label label-danger">NOTE! </span>
                                                            <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <button type="submit" name="btnSubmit">Submit</button>
                                                        <!--<a href="javascript:;" class="btn green"> Submit </a>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>-->
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE AVATAR TAB -->
                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                                <form id="changePasswordForm" action="{{url('/change_password')}}" method="post">
                                                    <div class="form-group">
                                                        <label class="control-label">Current Password</label>
                                                        <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
                                                        <input type="password" name="current_password" class="form-control" />
                                                        <label class="error" for="current_password"></label>
                                                        @if ($errors->has('current_password'))
                                                            <span class="help-block" style="color: red;">
                                                                <strong>{{ $errors->first('current_password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">New Password</label>
                                                        <input type="password" name="new_password" id="new_password" class="form-control" />
                                                        <label class="error" for="new_password"></label>
                                                        @if ($errors->has('new_password'))
                                                            <span class="help-block" style="color: red;">
                                                                <strong>{{ $errors->first('new_password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Re-type New Password</label>
                                                        <input type="password" name="confirm_newpassword" class="form-control" />
                                                        <label class="error" for="confirm_newpassword"></label>
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <button type="submit" name="btnChange">Change Password</button>
                                                        <!--<a href="javascript:;" class="btn green"> Change Password </a>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>-->
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE PASSWORD TAB -->
                                            <!-- PRIVACY SETTINGS TAB -->
                                            <div class="tab-pane" id="tab_1_4">
                                                <form action="#">
                                                    <table class="table table-light table-hover">
                                                        <tr>
                                                            <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus{{ asset('resources/assets/admin_assets/') }} </td>
                                                            <td>
                                                                <div class="mt-radio-inline">
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios1" value="option1" /> Yes
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios1" value="option2" checked/> No
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                            <td>
                                                                <div class="mt-radio-inline">
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios11" value="option1" /> Yes
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios11" value="option2" checked/> No
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                            <td>
                                                                <div class="mt-radio-inline">
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios21" value="option1" /> Yes
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios21" value="option2" checked/> No
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                            <td>
                                                                <div class="mt-radio-inline">
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios31" value="option1" /> Yes
                                                                        <span></span>
                                                                    </label>
                                                                    <label class="mt-radio">
                                                                        <input type="radio" name="optionsRadios31" value="option2" checked/> No
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!--end profile-settings-->
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn red"> Save Changes </a>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END PRIVACY SETTINGS TAB -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection

@section('other_js')
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<!--<script src="{{ asset('resources/assets/js/') }}/jquery.validate.js"></script>-->
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#updateProfileForm").validate({
            rules: {
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                dob: {
                    required: true
                },
                mobile_no: {
                    required: true,
                    minlength : 10,
                    digits: true
                },
                other_contact: {
                    required: true,
                    minlength : 10,
                    digits: true
                },
                skype: {
                    required: true
                },
                address: {
                    required: true
                },
                country: {
                    required: true
                },
                state: {
                    required: true
                },
                city: {
                    required: true
                },
                post_code: {
                    required: true,
                    digits: true
                },
                social_url: {
                    required: true
                }
            },
            /*messages: {

                email: {
                    required: "Email is required",
                    email: "Please enter valid email",
                },
                password: {
                    required: "Password is required"
                },
                tnc: {
                    required: "Please accept TNC first."
                }
            },*/
            submitHandler: function (form) {
                form.submit();
            }
        });

        $("#updatePicForm").validate({
            rules: {
                profile_pic:{
                    required:true,
                    accept:"image/jpg,image/jpeg,image/png,image/gif",
                    //accept:"image/*",
                    //extension: "jpg|jpeg|png|gif",
                    filesize: 200000//max size 200 kb
                }
            },messages: {
                profile_pic:{
                    filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png or .gif file of notice.",
                    required:"Please upload file."
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });

        $("#changePasswordForm").validate({
            rules: {
                current_password: {
                    required: true,
                    minlength : 5
                },
                new_password: {
                    required: true,
                    minlength : 5
                },
                confirm_newpassword: {
                    required: true,
                    equalTo : "#new_password"
                }
            },
            messages: {

                current_password: {
                    required: "Current password is required"
                },
                new_password: {
                    required: "New password is required"
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>
@stop
