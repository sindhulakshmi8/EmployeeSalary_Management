<?php
use App\Logs;
?>
@extends('layouts.app')

@section('content')

  <div class="page-wrapper">
    <!-- Page-body start -->
    <div class="page-body">
      <!-- Basic table card start -->
      <div class="card">
         <div class="row">
             <div class="col-md-12">
              <div class="card" style="overflow-x:auto;">
        <div class="card-block">
        <form class="form-material" id="addform" action="{{ route('employee.save') }}" method="POST">
                                    @csrf
                                   
                                    <div class="card-block">
                                       
                                        
            <div class="row">
              <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="emp_code" id="emp_code" value="{{$code}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">EmployeeCode</label>
                 <span id="error_emp_code" class="text-danger"></span>

                </div>
              </div>

                                            <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="email" name="email" id="email" value=""  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Email</label>
                 <span id="error_email" class="text-danger"></span>

                </div>
              </div> 
                          </div>

                          <div class="row">
                                            <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="first_name" id="first_name" value=""  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">First Name</label>
                 <span id="error_first_name" class="text-danger"></span>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="last_name" id="last_name" value=""  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Last Name</label>
                    <span id="error_last_name" class="text-danger"></span>
                </div>
              </div>
            </div>
            <div class="row">
                                            <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="age" id="age" value=""  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Age</label>
             <span id="error_age" class="text-danger"></span>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="mobile_number" id="mobile_number" value=""  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Mobile Number</label>
             <span id="error_mobile_number" class="text-danger"></span>
                </div>
              </div>
            </div>
            <div class="row">
                                            <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="department" id="department" value=""  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Department</label>
             <span id="error_department" class="text-danger"></span>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="designation" id="designation" value=""  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Designation</label>
                 <span id="error_designation" class="text-danger"></span>
                </div>
              </div>
            </div>
                            
                                  
                                    </div>
                                    <div class="form-actions">
              <button type="submit" class="btn btn-success" id="save"><i class="fa fa-check"></i> Save</button>
            </div>
                                </form>
              
        </div>

             </div>
         </div>
      </div>
    </div>
  </div>
  </div>
  <style type="text/css">
 .side-pannel{
  background: #F7F7F7;
  padding: 20px 10px 10px 10px;
  margin: 0px;
  border-radius: 8px;
  text-align: center;
  font-size: 18px;
  font-weight: 600;
}

</style>
@endsection
@section('script')
<script type="text/javascript">
  $('#save').click(function(){
  
  var error_emp_code = '';
  var error_email = '';
  var error_first_name = '';
  var error_last_name = '';
  var error_age = '';
  var error_mobile_number = '';
  var error_department = '';
  var error_designation = '';
  var mobile_validation = /^\d{10,14}$/;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if($.trim($('#emp_code').val()).length == 0)
  {
   error_emp_code = 'Code field is required';
   $('#error_emp_code').text(error_emp_code);
   $('#emp_code').addClass('has-error');
  }
  else
  {
   error_emp_code = '';
   $('#error_emp_code').text(error_emp_code);
   $('#emp_code').removeClass('has-error');
  }
   if($.trim($('#first_name').val()).length == 0)
  {
   error_first_name = 'First name field is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').addClass('has-error');
  }
  else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').removeClass('has-error');
  }
  if($.trim($('#last_name').val()).length == 0)
  {
   error_last_name= 'Last name field is required';
   $('#error_last_name').text(error_last_name);
   $('#last_name').addClass('has-error');
  }
  else
  {
   error_last_name = '';
   $('#error_last_name').text(error_last_name);
   $('#last_name').removeClass('has-error');
  }
  

if($.trim($('#age').val()).length == 0)
  {
   error_age= 'Age field is required';
   $('#error_age').text(error_age);
   $('#age').addClass('has-error');
  }
  else
  {
   error_age = '';
   $('#error_age').text(error_age);
   $('#age').removeClass('has-error');
  }

  if($.trim($('#department').val()).length == 0)
  {
   error_department= 'Department field is required';
   $('#error_department').text(error_department);
   $('#department').addClass('has-error');
  }
  else
  {
   error_department = '';
   $('#error_department').text(error_department);
   $('#department').removeClass('has-error');
  }
  if($.trim($('#designation').val()).length == 0)
  {
   error_designation= 'Department field is required';
   $('#error_designation').text(error_designation);
   $('#designation').addClass('has-error');
  }
  else
  {
   error_designation = '';
   $('#error_designation').text(error_designation);
   $('#designation').removeClass('has-error');
  }
  

  if($.trim($('#mobile_number').val()).length == 0)
  {
   error_mobile_number = 'Mobile Number is required';
   $('#error_mobile_number').text(error_mobile_number);
   $('#mobile_number').addClass('has-error');
  }
   else
  {
   if (!mobile_validation.test($('#mobile_number').val()))
   {
    error_mobile_number = 'Mobile Number Must Contains atleast 10 digits';
    $('#error_mobile_number').text(error_mobile_number);
    $('#mobile_number').addClass('has-error');
   }
   else
   {
    error_mobile_number = '';
    $('#error_mobile_number').text(error_mobile_number);
    $('#mobile_number').removeClass('has-error');
   }
  }

  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email Format';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
 }

  if(error_emp_code != '' || error_mobile_number != '' || error_email != '' || error_first_name != '' || error_last_name != '' || error_age != '' || error_department != ''|| error_designation != '')
  {
   return false;
  }
  else
  {
   $('#save').attr("disabled", "disabled");
   $("#addform").submit();
  }
  
 });
 </script>
@endsection

