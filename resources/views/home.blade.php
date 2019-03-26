@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Your Account is : {{auth()->user()->verified() ? 'Verified' : 'Not verified . Please go to your email and verify your account. Thank you for registration.'}} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
