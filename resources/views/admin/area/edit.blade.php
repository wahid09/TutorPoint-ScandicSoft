@extends('admin/layouts/app')
@section('head')
<link href="{{asset('admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@endsection
@section('main-content')
	<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Area</h2>
            </div>
            <!-- Horizontal Layout -->
            @include('includes/error')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Area
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
                            <form class="form-horizontal" action="{{route('area.update', $area->id)}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Area Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" name="name" class="form-control" placeholder="Enter your Area" value="{{$area->name}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">District</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select id="email_address_2" name="district_id" class="form-control">
                                                    
                                                    <option value="">name</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            -->
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