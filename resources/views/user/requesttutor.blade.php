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
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="search-group">
                                        <form>
                                            <div class="form-group row">
                                                <label for="fullname" class="col-sm-3 col-form-label">Full Name:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="fullname" placeholder="Enter your full name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectdist" class="col-sm-3 col-form-label">Select District:</label>
                                                <div class="col-sm-9">
                                                    <select name="" id="selectdist" class="form-control">
                                                        <option value="1">---Select District---</option>
                                                        <option value="1">Kishoregonj</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectarea" class="col-sm-3 col-form-label">Select Area:</label>
                                                <div class="col-sm-9">
                                                    <select name="" id="selectarea" class="form-control">
                                                        <option value="1">---Select Area---</option>
                                                        <option value="1">Kishoregonj</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectmedium" class="col-sm-3 col-form-label">Select Medium:</label>
                                                <div class="col-sm-9">
                                                    <select name="" id="selectmedium" class="form-control">
                                                        <option value="1">---Select Medium---</option>
                                                        <option value="1">Bangla Medium</option>
                                                        <option value="1">English Medium</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectclass" class="col-sm-3 col-form-label">Select Class:</label>
                                                <div class="col-sm-9">
                                                    <select name="" id="selectclass" class="form-control">
                                                        <option value="1">---Select Class---</option>
                                                        <option value="1">Database</option>
                                                        <option value="1">Programming</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectsub" class="col-sm-3 col-form-label">Select Subject:</label>
                                                <div class="col-sm-9">
                                                    <select name="" id="selectsub" class="form-control">
                                                        <option value="1">---Select Subject---</option>
                                                        <option value="1">Database</option>
                                                        <option value="1">Programming</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectschool" class="col-sm-3 col-form-label">Student School/ College:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="selectschool" placeholder="Enter your school/college name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectdays" class="col-sm-3 col-form-label">Days per week:</label>
                                                <div class="col-sm-9">
                                                    <select name="" id="selectdays" class="form-control">
                                                        <option value="1">---Select Days/week---</option>
                                                        <option value="1">3 days/week</option>
                                                        <option value="1">4 days/week</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectgender" class="col-sm-3 col-form-label">Gender of Student:</label>
                                                <div class="col-sm-9">
                                                    <select name="" id="selectgender" class="form-control">
                                                        <option value="1">--- Any Gender ---</option>
                                                        <option value="1">Male</option>
                                                        <option value="1">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectsalary" class="col-sm-3 col-form-label">Salary Range:</label>
                                                <div class="col-sm-9">
                                                    <select name="" id="selectsalary" class="form-control">
                                                        <option value="1">Salary Range</option>
                                                        <option value="1">300 - 4000</option>
                                                        <option value="1">4000 - 5000</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="selectgender" class="col-sm-3 col-form-label">Desired Tutor Gender:</label>
                                                <div class="col-sm-9">
                                                    <select name="" id="selectgender" class="form-control">
                                                        <option value="1">Any Gender</option>
                                                        <option value="1">Male</option>
                                                        <option value="1">Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="adderss" class="col-sm-3 col-form-label">Detail Address:</label>
                                                <div class="col-sm-9">
                                                    <textarea name="" rows="3" cols="5" id="adderss" class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="mobile" class="col-sm-3 col-form-label">Mobile:</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="mobile" maxlength="11" name="" required="required" size="11" type="tel" value="" placeholder="Enter your mobile number">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-sm-3 col-form-label">Email:</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" id="email" maxlength="11" name="" required="required" size="11" type="email" value="" placeholder="Enter your Email">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="adderss" class="col-sm-3 col-form-label">Additional Info in details (if multiple subjects mention here):</label>
                                                <div class="col-sm-9">
                                                    <textarea name="" rows="5" cols="5" id="adderss" class="form-control"></textarea>
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

@endsection