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
                                            <p class="profile-small-text">Tuition Related Information</p>
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
                                            <form class="form-horizontal" method="POST" action="{{route('tution.store')}}">
                                                {{ csrf_field() }}

                                                <!---->
                                                <div class="form-group">
                                                    <label for="example-date-input" class="col-md-4 control-label">Your Highest Qualification/Degree Name:</label>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" name="degree" id="example-date-input" placeholder="ex. B.SC(Engg) in Computer Secience & Engineering">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="barth" class="col-md-4 control-label">Expected Minimum Salary:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" type="text" name="salary" id="barth">
                                                            <option value="">SELECT</option>
                                                            <option value="1">2300</option>
                                                            <option value="2">5600</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender" class="col-md-4 control-label">Current Status for Tuition:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" type="text" name="status" id="gender">
                                                            <option value="">SELECT</option>
                                                            <option value="1">Available</option>
                                                            <option value="2">Busy</option>
                                                            <option value="3">Diactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender" class="col-md-4 control-label">Days per week:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" type="text" name="days" id="gender">
                                                            <option value="">SELECT</option>
                                                            <option value="1">3 days</option>
                                                            <option value="2">4 days</option>
                                                            <option value="3">5 days</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender" class="col-md-4 control-label">Preffered Tutoring Style:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" type="text" name="tution_style" id="gender">
                                                            <option value="">SELECT</option>
                                                            <option value="1">3 days</option>
                                                            <option value="2">4 days</option>
                                                            <option value="3">5 days</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender" class="col-md-4 control-label">Place of Learning:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" type="text" name="learning_place" id="gender">
                                                            <option value="">SELECT</option>
                                                            <option value="1">3 days</option>
                                                            <option value="2">4 days</option>
                                                            <option value="3">5 days</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender" class="col-md-4 control-label">Tutoring Approach:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" type="text" name="tution_approach" id="gender">
                                                            <option value="">SELECT</option>
                                                            <option value="1">3 days</option>
                                                            <option value="2">4 days</option>
                                                            <option value="3">5 days</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender" class="col-md-4 control-label">Preferred Medium Of Education:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" type="text" name="medium" id="gender">
                                                            <option value="">SELECT</option>
                                                            <option value="1">3 days</option>
                                                            <option value="2">4 days</option>
                                                            <option value="3">5 days</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender" class="col-md-4 control-label">Preferred Classes:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" type="text" name="preferred_class" id="gender">
                                                            <option value="">SELECT</option>
                                                            <option value="1">3 days</option>
                                                            <option value="2">4 days</option>
                                                            <option value="3">5 days</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender" class="col-md-4 control-label">Preferred Subjects:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" type="text" name="preferred_subject" id="gender">
                                                            <option value="">SELECT</option>
                                                            <option value="1">3 days</option>
                                                            <option value="2">4 days</option>
                                                            <option value="3">5 days</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gender" class="col-md-4 control-label">Preferred District to Teach:</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" type="text" name="district" id="gender">
                                                            <option value="">SELECT</option>
                                                            <option value="1">3 days</option>
                                                            <option value="2">4 days</option>
                                                            <option value="3">5 days</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mstatus" class="col-md-4 control-label">Preferred Areas to Teach:</label>
                                                    <div class="col-md-6">
                                                        <select name="area" class="form-control" id="mstatus">
                                                            <option value="">Select</option>
                                                            <option value="1">First Division</option>
                                                            <option value="2">Second Division</option>
                                                            <option value="3">Third Division</option>
                                                            <option value="4">Grade</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                

                                                <!---->
                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            Upload Tution Info
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
                                    <a href="{{route('academic.create')}}" class="list-group-item list-group-item-action"><i class="fa fa-book"></i>&nbsp; Academic Inforemation</a>
                                    <a href="{{route('tution.create')}}" class="list-group-item list-group-item-action"><i class="fa fa-info"></i>&nbsp; Tution Related Inforemation</a>
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