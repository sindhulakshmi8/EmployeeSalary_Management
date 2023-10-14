<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Mail;

class EmployeeController extends Controller
{
    public function Employeelist(Request $request){

         $employeelist = Employee::get();
        return view('employee.employeelist',compact('employeelist'));

    }
    public function add(Request $request){

         $title = "Create Employee";
         $code = 'EMP'.rand();
        return view('employee.add',compact('title','code'));

    } 
    public function save(Request $request){

         $emp = new Employee;
         $emp->empcode = $request->emp_code;
         $emp->email = $request->email;
         $emp->first_name = $request->first_name;
         $emp->last_name = $request->last_name;
         $emp->age = $request->age;
         $emp->mobilenumber = $request->mobile_number;
         $emp->department = $request->department;
         $emp->designation = $request->designation;
         $emp->save();
         $request->Session()->flash('success', 'Employee Created Successfully');

         //Need SMTP details to check this email sending functionality

         /* $user['to'] = $request->email;
         $data = ['name' => $request->first_name, 'email' => $request->email,'password' => '12345678'];

          Mail::send('employee.welcomemail',$data,function($messages) use ($user){
            $messages->to($user['to']);
            $messages->subject('Welcome Mail');
        }); */
        return redirect()->route('employee.list');

    }

   public function edit($id){

         $title = "Edit Employee";
         $employeelist = Employee::where('id',$id)->first();
        return view('employee.edit',compact('title','employeelist'));

    } 
     public function update(Request $request){

         $emp = Employee::where('id',$request->id)->first();
         $emp->empcode = $request->emp_code;
         $emp->email = $request->email;
         $emp->first_name = $request->first_name;
         $emp->last_name = $request->last_name;
         $emp->age = $request->age;
         $emp->mobilenumber = $request->mobile_number;
         $emp->department = $request->department;
         $emp->designation = $request->designation;
         $emp->save();
         $request->Session()->flash('success', 'Employee Updated Successfully');
        return redirect()->route('employee.list');

    }
    public function delete($id){

         $emp = Employee::where('id',$id)->delete();
         Session()->flash('success', 'Employee Deleted Successfully');

        return redirect()->route('employee.list');

    }
}
