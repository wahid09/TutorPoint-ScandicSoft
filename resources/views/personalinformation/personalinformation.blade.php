@extends('user/app')
@section('head')
<style type="text/css" media="screen">

    header.inner-header .top-header div.left-side > ul > li > a,
    header.inner-header .top-header .bootstrap-select.btn-group .dropdown-toggle .filter-option,
    header.inner-header .bootstrap-select.btn-group .dropdown-toggle .caret:before {
        color: black;
    }
</style>
@endsection
@section('main-content')
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 request-tutor">
                <div class="row">
                    <div class="request-for-tutor">
                        <h3>TUTOR CONTROL PANEL</h3>
                    </div>
                </div>
                <div class="row">
                    <!--
                    <div class="row">
                        <div class="col-md-12">
                            <div class="request-head">
                                <h3>If you want a house tutor, Please fill up the form.</h3>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="user-profile">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12 u-profile">
                                            <img src="/uploads/avatars/{{$user->avatar}}" alt="user-image" class="u-image-small">
                                            <p class="u-image-small-text">My Profile</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12 u-primium">
                                            <div class="alert alert-success" role="alert">
                                                <p><i class="fa fa-exclamation-triangle"></i>&nbsp;You are not a Premium or Featured Tutor. Upgrade your membership to get better response. 
                                                    <a href="#">Click here to know more details</a></p>
                                            </div>
                                            <a href="#" class="btn btn-primary pull-right">Upgrade Tutor Membership</a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        @include('includes.error')
                                        <!-- Tutor Personal information update -->
                                        <div class="tutor-profile">
                                            <form class="form-horizontal" method="POST" action="{{route('personalinformation.store')}}">
                                                {{ csrf_field() }}

                                                <!---->
                                                <div class="form-group">
                                                    <label for="example-date-input" class="col-md-4 control-label">Date Of Birth:</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="date" value="2011-08-19" name="bod" id="example-date-input">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="barth" class="col-md-4 control-label">Blood Group:</label>
                                                    <div class="col-md-6">
                                                        <select name="blood" class="form-control" id="barth">
                                                            <option value="">Select</option>
                                                            <option value="1">A+</option>
                                                            <option value="2">B+</option>
                                                            <option value="3">AB+</option>
                                                        </select>
                                                        <label class="container">
                                                            <input type="checkbox" name="interest" value="1">
                                                            <span class="checkmark">Intersted to donate blood.</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender" class="col-md-4 control-label">Gender:</label>
                                                    <div class="col-md-6">
                                                        <select name="sex" class="form-control" id="gender">
                                                            <option value="">Select</option>
                                                            <option value="1">male</option>
                                                            <option value="2">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mstatus" class="col-md-4 control-label">Marital Status:</label>
                                                    <div class="col-md-6">
                                                        <select name="maritalstatus" class="form-control" id="mstatus">
                                                            <option value="">Select</option>
                                                            <option value="1">Married</option>
                                                            <option value="2">Unmarried</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="religion" class="col-md-4 control-label">Religion:</label>
                                                    <div class="col-md-6">
                                                        <select name="religion" class="form-control" id="religion">
                                                            <option value="">Select</option>
                                                            <option value="1">Islam</option>
                                                            <option value="2">Hindu</option>
                                                            <option value="3">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-date-input" class="col-md-4 control-label">Present Address:</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" name="address" id="example-date-input">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mob" class="col-md-4 control-label">Mobile:</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" id="mob" maxlength="11" name="phone" size="11" type="tel" value="" placeholder="Enter your mobile number">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-date-input" class="col-md-4 control-label">Describe Yourself/Experiance:</label>
                                                    <div class="col-md-6">
                                                        <textarea name="experiance" rows="5" cols="6" class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <!---->
                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            Upload Personal Info
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- //Tutor information update -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 faq-request">
                            <div class="faq-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        <i class="fa fa-edit"></i>&nbsp;Upgrade Tuto membership
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-bell"></i>&nbsp;My Notification</a>
                                    <a href="{{route('profile.index')}}" class="list-group-item list-group-item-action"><i class="fa fa-user"></i>&nbsp;My Profile</a>
                                    <a href="{{route('userphoto.create')}}" class="list-group-item list-group-item-action"><i class="fa fa-camera"></i>&nbsp;My Photo</a>
                                    <a href="{{route('personalinformation.create')}}" class="list-group-item list-group-item-action"><i class="fa fa-info"></i>&nbsp; Personal Inforemation</a>
                                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-book"></i>&nbsp; Academic Inforemation</a>
                                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-info"></i>&nbsp; Tution Related Inforemation</a>
                                    <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-edit"></i>&nbsp; Change Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection