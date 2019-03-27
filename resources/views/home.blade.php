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
                    

                <div class="dash">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="lead">Your Account is : {{auth()->user()->verified() ? 'Verified' : 'Not verified . Please go to your email and verify your account. Thank you for registration.'}} </p>
                </div>
            </div>
        </div>
        </div>

@endsection






