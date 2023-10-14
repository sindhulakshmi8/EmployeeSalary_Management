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
        <form class="form-material" id="editform" action="{{ route('employee.update') }}" method="POST">
                                    @csrf
                                   <input type="hidden" id="id" name="id" value="{{$employeelist->id}}" />
                                    <div class="card-block">
                                       
                                        
            <div class="row">
              <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="emp_code" id="emp_code" value="{{$employeelist->empcode}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">EmployeeCode</label>
                  @if($errors->has('emp_code'))
                  <span class="invalid-feedback">
                  <strong>{{$errors->first('emp_code')}}</strong>
                  </span>
                  @endif
                </div>
              </div>

                                            <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="email" name="email" id="email" value="{{$employeelist->email}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Email</label>
                  @if($errors->has('email'))
                  <span class="invalid-feedback">
                  <strong>{{$errors->first('email')}}</strong>
                  </span>
                  @endif
                </div>
              </div> 
                          </div>

                          <div class="row">
                                            <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="first_name" id="first_name" value="{{$employeelist->first_name}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">First Name</label>
                  @if($errors->has('first_name'))
                  <span class="invalid-feedback">
                  <strong>{{$errors->first('first_name')}}</strong>
                  </span>
                  @endif
                </div>
              </div> 
              <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="last_name" id="last_name" value="{{$employeelist->last_name}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Last Name</label>
                  @if($errors->has('last_name'))
                  <span class="invalid-feedback">
                  <strong>{{$errors->first('last_name')}}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
                                            <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="age" id="age" value="{{$employeelist->age}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Age</label>
                  @if($errors->has('age'))
                  <span class="invalid-feedback">
                  <strong>{{$errors->first('age')}}</strong>
                  </span>
                  @endif
                </div>
              </div> 
              <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="mobile_number" id="mobile_number" value="{{$employeelist->mobilenumber}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Mobile Number</label>
                  @if($errors->has('mobile_number'))
                  <span class="invalid-feedback">
                  <strong>{{$errors->first('mobile_number')}}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
                                            <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="department" id="department" value="{{$employeelist->department}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Department</label>
                  @if($errors->has('department'))
                  <span class="invalid-feedback">
                  <strong>{{$errors->first('department')}}</strong>
                  </span>
                  @endif
                </div>
              </div> 
              <div class="col-md-6">
                <div class="form-group form-default">
                  <input type="text" name="designation" id="designation" value="{{$employeelist->designation}}"  class="form-control">
                  <span class="form-bar"></span>
                  <label class="float-label">Designation</label>
                  @if($errors->has('designation'))
                  <span class="invalid-feedback">
                  <strong>{{$errors->first('designation')}}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
                            
                                  
                                    </div>
                                    <div class="form-actions">
              <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
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


