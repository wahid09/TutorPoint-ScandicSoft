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
                                        <div class="col-md-4">
                                            <img src="/uploads/avatars/{{$user->avatar}}" class="user-big-img" alt="user image">
                                            <p><strong>Member Science:</strong> 04/10/2019</p>
                                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                        <div class="col-md-8">
                                            <h4>{{$user->name}}</h4>
                                            <p><strong>ID #</strong>12345</p>
                                            <p><strong>Experience:</strong>&nbsp;{{$info->experiance}}</p>
                                            <p><strong>Qualification:</strong>&nbsp;{{$edu->education_lavel}} in {{$edu->major}}</p>
                                            <p><strong>Area Covered:</strong>&nbsp;{{$info->address}}</p>
                                            <p><strong>Teaching:</strong>12345</p>
                                            <p><strong>Phone:</strong>&nbsp;{{$info->phone}}</p>
                                            <p><strong>Email:</strong>&nbsp;{{Auth::user()->email}}</p>
                                            <a href="{{route('personalinformation.show', $info->id)}}" class="pull-right"><i class="fa fa-edit"></i>Edit info</a>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="t-info">Tuition Info:</h4>
                                            <table id="table1">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Expected Minimum Salary:</td>
                                                        <td colspan="6" class="c2-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Current Status for Tuition:</td>
                                                        <td colspan="6" class="c2-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Days per week:</td>
                                                        <td colspan="6" class="c2-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Preffered Tutoring Style:</td>
                                                        <td colspan="6" class="c2-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Place of Learning:</td>
                                                        <td colspan="6" class="c2-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Extra Facilities:</td>
                                                        <td colspan="6" class="c2-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Preferred Medium Of:</td>
                                                        <td colspan="6" class="c2-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Education:</td>
                                                        <td colspan="6" class="c2-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Preferred Classes:</td>
                                                        <td colspan="6" class="c2-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Preferred Subjects:</td>
                                                        <td colspan="6" class="c2-text"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Preferred Areas to Teach:</td>
                                                        <td colspan="6" class="c2-text"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <a href="#" class="pull-right"><i class="fa fa-edit"></i>Edit info</a>
                                        </div>
                                        </div>
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