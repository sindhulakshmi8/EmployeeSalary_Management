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
        <form class="form-material" id="addform" action="{{ route('salary.update') }}" method="POST">
                                    @csrf
                                   
                                    <div class="card-block">
                                       
                                        
            <div class="row">
              <div class="col-md-6">
                <div class="form-group form-default">
               <input type="month" id="month" name="month" class="form-control" value="{{$salarylist->month}}">
               <input type="hidden" id="id" name="id" class="form-control" value="{{$salarylist->id}}">
                  <span class="form-bar"></span>
                  <label class="float-label">Month</label>
                <span id="error_month" class="text-danger"></span>
                </div>
              </div>

                                            <div class="col-md-6">
                <div class="form-group form-default">
                 <select name="emp_id" class="form-control" id="emp_id">
                     <option>Choose Employee</option>
                     @foreach($employeelist as $emplist)
                      
                     <option value="{{$emplist->id}}" @isset($salarylist->id) {{ ($salarylist->emp_id == $emplist->id) ? 'selected':''}}@endisset >{{$emplist->first_name}}</option>
                      @endforeach
                 </select>
                  <span class="form-bar"></span>
                  <label class="float-label">Employee</label>
                <span id="error_emp" class="text-danger"></span>

                </div>
              </div> 
                          </div>

                          <div class="row">
                                            <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="no_of_working_days" id="no_of_working_days" value="{{$salarylist->no_of_working_days}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">No of Working Days</label>
                <span id="error_no_of_working_days" class="text-danger"></span>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="salary_per_day" id="salary_per_day" value="{{$salarylist->salary_per_day}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Salary Per Day</label>
            <span id="error_salary_per_day" class="text-danger"></span>
                </div>
              </div>
            </div>
             <div class="row">
                                            <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="total_salary" id="total_salary" value="{{$salarylist->total_salary}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Total Salary</label>
            <span id="error_total_salary" class="text-danger"></span>
                </div>
              </div> 
               
            </div>

                          
                            
                                  
                                    </div>
                                    <div class="form-actions">
              <button type="submit" class="btn btn-success" id="save"> <i class="fa fa-check"></i> Save</button>
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

    $('#salary_per_day').on("change",function(){
      var days = $('#no_of_working_days').val();
      var salary = $('#salary_per_day').val();
      var total = (days * salary);
       $('#total_salary').val(total);
    });
    $('#no_of_working_days').on("change",function(){
      var days = $('#no_of_working_days').val();
      var salary = $('#salary_per_day').val();
      var total = (days * salary);
       $('#total_salary').val(total);
    });
 $('#save').click(function(){
  
  var error_month = '';
  var error_emp = '';
  var error_no_of_working_days = '';
  var salary_per_day = '';
  var total_salary = '';
  

  if($.trim($('#month').val()).length == 0)
  {
   error_month = 'Month field is required';
   $('#error_month').text(error_month);
   $('#month').addClass('has-error');
  }
  else
  {
   error_month = '';
   $('#error_month').text(error_month);
   $('#month').removeClass('has-error');
  }
  if($.trim($('#emp_id').val()).length == 0)
  {
   error_emp = 'Employee field is required';
   $('#error_emp').text(error_emp);
   $('#emp_id').addClass('has-error');
  }
  else
  {
   error_emp = '';
   $('#error_emp').text(error_emp);
   $('#emp_id').removeClass('has-error');
  }
  if($.trim($('#no_of_working_days').val()).length == 0)
  {
   error_no_of_working_days = 'No of Working days field is required';
   $('#error_no_of_working_days').text(error_no_of_working_days);
   $('#no_of_working_days').addClass('has-error');
  }
  else
  {
   error_no_of_working_days = '';
   $('#error_no_of_working_days').text(error_no_of_working_days);
   $('#no_of_working_days').removeClass('has-error');
  } 


  if($.trim($('#salary_per_day').val()).length == 0)
  {
   error_salary_per_day = 'Salary per day field is required';
   $('#error_salary_per_day').text(error_salary_per_day);
   $('#salary_per_day').addClass('has-error');
  }
  else
  {
   error_salary_per_day = '';
   $('#error_salary_per_day').text(error_salary_per_day);
   $('#salary_per_day').removeClass('has-error');
  }

if($.trim($('#total_salary').val()).length == 0)
  {
   error_total_salary = 'Total Salary field is required';
   $('#error_total_salary').text(error_total_salary);
   $('#total_salary').addClass('has-error');
  }
  else
  {
   error_total_salary = '';
   $('#error_total_salary').text(error_total_salary);
   $('#total_salary').removeClass('has-error');
  }

  
  

  if(error_month != '' || error_emp != '' || error_no_of_working_days != '' || error_no_of_working_days != '' || error_total_salary != '')
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


