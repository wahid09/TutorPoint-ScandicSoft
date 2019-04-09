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
                                <h3>REQUEST A TUTOR</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="request-head">
                                        <h3>If you want a house tutor, Please fill up the form.</h3>
                                        @include('includes.message')
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="search-group">
                                        <form action="{{route('request.store')}}" method="POST">
                                            {{csrf_field()}}
                                            <div class="form-group row">
                                                <label for="fullname" class="col-sm-3 col-form-label">Full Name:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="fullname" placeholder="Enter your full name" name="name" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectdist" class="col-sm-3 col-form-label">Select District:</label>
                                                <div class="col-sm-9">
                                                    <select name="district_id" id="selectdist" class="form-control">
                                                        <option value="1">---Select District---</option>
                                                        @foreach($districts as $key =>$district)
                                                        <option value="{{$key}}">{{$district}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectarea" class="col-sm-3 col-form-label">Select Area:</label>
                                                <div class="col-sm-9">
                                                    <select name="aarea" id="selectarea" class="form-control">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectmedium" class="col-sm-3 col-form-label">Select Medium:</label>
                                                <div class="col-sm-9">
                                                    <select name="medium_id" id="selectmedium" class="form-control">
                                                        <option value="1">---Select Medium---</option>
                                                        @foreach($mediums as $key =>$value)
                                                        <option value="{{$key}}">{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectclass" class="col-sm-3 col-form-label">Select Class:</label>
                                                <div class="col-sm-9">
                                                    <select name="class_id" id="selectclass" class="form-control">
                                                        <option value="1">---Select Class---</option>
                                                        @foreach($classes as $key =>$value)
                                                        <option value="{{$key}}">{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectsub" class="col-sm-3 col-form-label">Select Subject:</label>
                                                <div class="col-sm-9">
                                                    <select name="subject_id" id="selectsub" class="form-control">
                                                        <option value="1">---Select Subject---</option>
                                                        @foreach($subjects as $key =>$value)
                                                        <option value="{{$key}}">{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectschool" class="col-sm-3 col-form-label">Student School/ College:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="selectschool" placeholder="Enter your school/college name" name="school_name" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectdays" class="col-sm-3 col-form-label">Days per week:</label>
                                                <div class="col-sm-9">
                                                    <select name="day_id" id="selectdays" class="form-control">
                                                        <option value="1">---Select Tution days per Week---</option>
                                                        @foreach($days as $key =>$value)
                                                        <option value="{{$key}}">{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectgender" class="col-sm-3 col-form-label">Gender of Student:</label>
                                                <div class="col-sm-9">
                                                    <select name="gender_id" id="selectgender" class="form-control">
                                                        <option value="1">---Select Student Gender---</option>
                                                        @foreach($sex as $key =>$value)
                                                        <option value="{{$key}}">{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectsalary" class="col-sm-3 col-form-label">Salary Range:</label>
                                                <div class="col-sm-9">
                                                    <select name="salary_id" id="selectsalary" class="form-control">
                                                        <option value="1">---Select Salary Range---</option>
                                                        @foreach($salaries as $key =>$value)
                                                        <option value="{{$key}}">{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            

                                            <div class="form-group row">
                                                <label for="adderss" class="col-sm-3 col-form-label">Detail Address:</label>
                                                <div class="col-sm-9">
                                                    <textarea name="address" rows="3" cols="5" id="adderss" class="form-control" required="required"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="mobile" class="col-sm-3 col-form-label">Mobile:</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="mobile" maxlength="11" name="mobile" required="required" size="11" type="tel" value="" placeholder="Enter your mobile number">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-sm-3 col-form-label">Email:</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="email" name="email" required="required" type="email" value="" placeholder="Enter your Email">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="adderss" class="col-sm-3 col-form-label">Additional Info in details (if multiple subjects mention here):</label>
                                                <div class="col-sm-9">
                                                    <textarea name="note" rows="5" cols="5" id="adderss" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label"></label>
                                                <div class="col-sm-9">
                                                    <input type="submit" name="btn" class="btn btn-success form-control">
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