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
          <div class="row clearfix mb-3">
                 
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="text-white h-70">
                        <div class="card-body bg-danger" style="background: -webkit-gradient(linear, left top, right top, from(#dc3545), to(#e09691));border-radius: 8px;">
                          <h1 class="display-4"><b> {{$totalemp}}</b></h1>
                            <div class="rotate">
                                <i class="fa fa-users fa-1x"></i>
                                <span class="text-uppercase">Total Employee</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="text-white h-70">
                        <div class="card-body bg-info" style="background: -webkit-gradient(linear, left top, right top, from(#17a2b8), to(#96e6f1));border-radius: 8px;">
                            <h1 class="display-4"><b>{{$totalsalary}} </b></h1>
                            <div class="rotate">
                                <i class="fa fa-user fa-1x"></i>
                                <span class="text-uppercase">Total Salary</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="text-white h-70">
                        <div class="card-body bg-warning" style="background: -webkit-gradient(linear, left top, right top, from(#ffc107), to(#f9f0a3));border-radius: 8px;">
                            <h1 class="display-4"><b>{{$totaldays}}</b></h1>
                            <div class="rotate">
                                <i class="fa fa-cubes fa-1x"></i>
                                <span class="text-uppercase">No Of Working Days</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="text-white h-70">
                        <div class="card-body bg-success" style="background: -webkit-gradient(linear, left top, right top, from(#28a745), to(#8cf194));border-radius: 8px;">
                            <h1 class="display-4"><b>{{$totalUsers}}</b></h1>
                            <div class="rotate">
                                <i class="fa fa-user fa-1x"></i>
                                <span class="text-uppercase">Total Users</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
