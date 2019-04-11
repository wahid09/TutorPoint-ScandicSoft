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
                        <h3>REGISTER AS A TUTOR IN FREE!</h3>
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
                            <div class="tutorlogin">
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">Name</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 faq-request">
                            <div class="faq-header">
                                <h4>Help & Info:</h4>
                            </div>
                            <div class="faq-body">
                                <h5>Q. Is registration free of cost ?</h5>
                                <p>Ans: Yes registration as a tutor is free of cost. Permium tutors are placed on the front pages. More features are coming soon.</p>
                                <h5>Q. Why email need to be verified ?</h5>
                                <p>Ans: Email needs to be verified to make confirmed that you own that email address and avoid spam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




















