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
          <div style="float:right;"> <a href="{{ route('employee.add') }}"
                class="btn btn-success">Create Employee</a></div>
                <br><br><br>
           <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Employee Code</th>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
                  $i=1;
                  foreach($employeelist as $emplist)
                  {
                    ?>
    <tr>
      <th scope="row">{{ $i }}</th>
      <th>{{ $emplist->empcode}}</th>
      <td>{{ $emplist->first_name}}</td>
      <td>{{ $emplist->email}}</td>
      <td>{{ $emplist->age}}</td>
      <td>{{ $emplist->mobilenumber}}</td>
      <td>{{ $emplist->department}}</td>
      <td>{{ $emplist->designation}}</td>
      <td><a href="{{ route('employee.edit',['id'=>$emplist->id]) }}"><i class="fa fa-edit" style="color:skyblue;font-weight: 600;"></i></a>
      <a href="{{ route('employee.delete',['id'=>$emplist->id]) }}"><i class="fa fa-remove" style="color:red;font-weight: 600;"></i></a></td>
      
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
@section('script')
 <script type="text/javascript">
 
</script>
@endsection
