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
                                        <h4 class="pull-left">Available Tuitions ()</h4>
                                        <a href="{{route('request.create')}}" class="pull-right">Post a Tuition / Request a Tutor</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="search-group">
                                        <div class="card-request">
                                          <div class="c-header">
                                            Featured
                                          </div>
                                          <div class="c-body">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                          </div>
                                        </div>
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
    $(document).ready(function() {
        $('select[name="state"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '/myform/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });
</script>

@endsection
@section('bootm')

@endsection