<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Salary;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(Request $request){
        $totalUsers = User::count();
         $totalemp = Employee::count();
         $totalsalary = Salary::sum('total_salary');
         $totaldays = Salary::sum('no_of_working_days');
        return view('dashboard',compact('totalemp','totalsalary','totaldays','totalUsers'));
    }
}
