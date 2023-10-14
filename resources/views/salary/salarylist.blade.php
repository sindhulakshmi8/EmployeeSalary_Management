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
          <div style="float:right;"> <a href="{{ route('salary.add') }}"
                class="btn btn-success">Create Salary</a></div>
                <br><br><br>
           <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Month</th>
      <th scope="col">Employee Name</th>
      <th scope="col">No of Working Days</th>
      <th scope="col">Salary Per Day</th>
      <th scope="col">Total Salary</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
                  $i=1;
                  foreach($salarylist as $salary)
                  {
                    ?>
    <tr>
      <th scope="row">{{ $i }}</th>
       <td>{{ $salary->month}}</td>
       @foreach($employeelist as $list)
        @if($list->id == $salary->emp_id)
      <td>{{ $list->first_name}}</td>
      @endif
      @endforeach
      <td>{{ $salary->no_of_working_days}}</td>
      <td>{{ $salary->salary_per_day}}</td>
      <td>{{ $salary->total_salary}}</td>
       <td><a href="{{ route('salary.edit',['id'=>$salary->id]) }}"><i class="fa fa-edit" style="color:skyblue;font-weight: 600;"></i></a>
      <a href="{{ route('salary.delete',['id'=>$salary->id]) }}"><i class="fa fa-remove" style="color:red;font-weight: 600;"></i></a></td>
      
    </tr>
    <?php
                    $i++;
                  }
                  ?>
  </tbody>
</table>

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
