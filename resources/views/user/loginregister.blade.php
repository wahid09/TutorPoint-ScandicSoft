@extends('user/app')
@section('head')
@endsection
@section('main-content')
 <div class="main-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 request-tutor">
                        <div class="row">
                            <div class="request-for-tutor">
                                <h3>SELECT YOUR OPTION</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center art">
                        <a href="{{route('register')}}"><p class="lead">I want to be a Tutor</p></a>
                        <h3>OR</h3>
                        <a href="{{URL::to('requesttutor')}}"><p class="lead">I need a Tutor</p></a>
                    </div>
                </div>
            </div>
        </div>

@endsection