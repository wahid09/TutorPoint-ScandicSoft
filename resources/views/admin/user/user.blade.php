@extends('admin/layouts/app')
@section('head')
<link href="{{asset('admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@endsection
@section('main-content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Admin</h2>
        </div>
        <!-- Horizontal Layout -->
        @include('includes/error')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add Admin
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form class="form-horizontal" action="{{route('user.store')}}" method="POST">
                            {{csrf_field()}}
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="admin_name">Admin Name:</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="admin_name" name="name" class="form-control" placeholder="Enter your name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="admin_email">Admin Email:</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" id="admin_email" name="email" class="form-control" placeholder="Enter your Email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="admin_pass">Admin Password:</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" id="admin_pass" name="password" class="form-control" placeholder="Enter your Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="admin_cpass">Confirm Password:</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" id="cadmin_pass" name="confirm_password" class="form-control" placeholder="Enter your Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-7">
                                    <div class="form-group"> 
                                        <h2 class="card-inside-title">Status:</h2>
                                        <div class="demo-checkbox">
                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red"/ value="1" name="status">
                                            <label for="md_checkbox_21">Active</label>

                                        </div>
                                        <!-- -->
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-7">
                                    <div class="form-group">
                                        <h2 class="card-inside-title">Assign Role:</h2>
                                        <div class="demo-checkbox">
                                            @foreach($roles as $role)
                                            <input type="checkbox" class="filled-in chk-col-blue"/ value="{{$role->id}}" id="{{$role->name}}">
                                                   <label for="{{$role->name}}">{{$role->name}}</label>
                                            @endforeach
                                        </div>
                                        <!-- -->
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Horizontal Layout -->

    </div>
</section>
@endsection