<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Session;

class employeeController extends Controller
{
    function show_add_employee(){
    	return view('employees/add_employee');
    }
    function show_insert_employee(Request $request){

$employee = new Employee;
$employee->name = $request->name;
$employee->phone = $request->phone;
$employee->email = $request->email;
 $employee->save();
return redirect ('employee_list');
    }


    function show_employee_list(){
    	$employees = Employee::get();
    	
    	return view('employees/employee_list',compact('employees'));
    }
    function delete_employee($eid){
        $employee = Employee::find($eid);
        $employee->delete();

        Session::flash('success', "employee deleted!");
        return redirect('employee_list');
    }
    function edit_employee($id){
        $employee= Employee::find($id);
        return view('employees/edit_employee', compact('employee'));
    }
    function update_employee(Request $request, $id)
    {
    $employee = Employee::find($id);

    $employee->name = $request->name;
    $employee->phone = $request->phone;
    $employee->email = $request->email;
    $employee->save();
    Session::flash('success',"employee updated");
    return redirect('employee_list');
}}
