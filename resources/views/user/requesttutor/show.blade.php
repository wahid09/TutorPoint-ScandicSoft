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
                        <h3>TUITIONS</h3>
                    </div>
                </div>
                @include('includes.message')
                <div class="row">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="request-head">
                                <h4 class="pull-left">Available Tuitions ({{$requests->count()}})</h4>
                                <a href="{{route('request.create')}}" class="pull-right">Post a Tuition / Request a Tutor</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="search-group">
                                <!--    Tution Card -->
                                @foreach($requests as $value)
                                <div class="style_border">
                                    <div class="row">
                                        <div class="col-md-12 c-header">
                                            <h4 class="c-title">{{$value->district->name}}</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 c-body">
                                            <p class="card-text-c">
                                            <table id="table1">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Tuition ID #:</td>
                                                        <td colspan="6" class="c2-text">{{$value->id.mt_rand(1000000, 9999999)}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Class/ Subject:</td>
                                                        <td colspan="6" class="c2-text">{{$value->class->name}},&nbsp;{{$value->subject->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Location:</td>
                                                        <td colspan="6" class="c2-text">{{$value->district->name}}, &nbsp;{{$value->address}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Days:</td>
                                                        <td colspan="6" class="c2-text">{{$value->day->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="c-text">Salary Range:</td>
                                                        <td colspan="6" class="c2-text">{{$value->salary->name}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 c-footer">
                                            <p>Posted on: <strong>{{ \Carbon\Carbon::parse($value->from_date)->format('d/m/Y')}}</strong></p>
                                            <a href="{{route('login')}}">Login to view contact information</a></br>
                                            <a href="{{route('request.edit', $value->id)}}" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!--   // Tution Card -->

                            </div>
                        </div>
                        <div class="col-md-4 faq-request">
                            <div class="faq-header">
                                <h4>Help & Info:</h4>
                            </div>
                            <div class="faq-body">
                                <h5>Q. If i cant get the desired tutor ?</h5>
                                <p>Just fill up the request tutor form and send us. We will try to find your desired tutor.</p>
                                <h5>Q. what will happen after fill the forms ?</h5>
                                <p>After fill up the form the information will be sent to bdtutorsfinalnew support team. They will review/ verify the info and will publish on the available tuitions section.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="state"]').on('change', function () {
            var stateID = $(this).val();
            if (stateID) {
                $.ajax({
                    url: '/myform/ajax/' + stateID,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {


                        $('select[name="city"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="city"]').append('<option value="' + key + '">' + value + '</option>');
                        });


                    }
                });
            } else {
                $('select[name="city"]').empty();
            }
        });
    });
</script>

@endsection
@section('bootm')

@endsection