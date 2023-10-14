<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;
use App\Models\Employee;

class SalaryController extends Controller
{
    public function Salarylist(Request $request){
         $salarylist = Salary::get();
         $employeelist = Employee::get();

         return view('salary.salarylist',compact('salarylist','employeelist'));
    } 
    public function add(Request $request){
         $salarylist = Salary::get();
         $employeelist = Employee::get();
        return view('salary.add',compact('salarylist','employeelist'));
    }

    public function save(Request $request){

         $salary = new Salary;
         $salary->emp_id = $request->emp_id;
         $salary->month = $request->month;
         $salary->no_of_working_days = $request->no_of_working_days;
         $salary->salary_per_day = $request->salary_per_day;
         $salary->total_salary = $request->total_salary;
         $salary->save();
         $request->Session()->flash('success', 'Salary Created Successfully');
        return redirect()->route('salary.list');

    }

    public function edit($id){

         $title = "Edit Salary";
         $employeelist = Employee::get();
         $salarylist = Salary::where('id',$id)->first();
        return view('salary.edit',compact('title','employeelist','salarylist'));

    } 

    public function update(Request $request){

         $salary = Salary::where('id',$request->id)->first();
         $salary->emp_id = $request->emp_id;
         $salary->month = $request->month;
         $salary->no_of_working_days = $request->no_of_working_days;
         $salary->salary_per_day = $request->salary_per_day;
         $salary->total_salary = $request->total_salary;
         $salary->save();
         $request->Session()->flash('success', 'Salary Updated Successfully');
        return redirect()->route('salary.list');

    }

    public function delete($id){

         $emp = Salary::where('id',$id)->delete();
         Session()->flash('success', 'Salary Deleted Successfully');

        return redirect()->route('salary.list');

    }
}
