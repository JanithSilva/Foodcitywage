<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $employees =  Employee::orderBy('created_at', 'asc')->paginate(10);
        return view('employees.index')->with('employees', $employees);
    }


    public function create()
    {
        return view('employees.create');
    }


    public function store(Request $request)
    {

        $employee = new Employee();
        $employee -> Name = $request -> input('name');
        $employee -> Address = $request -> input('address');
        $employee -> Phone = $request -> input('phone');
        $employee -> Designation = $request -> input('designation');

        //$employee -> user_id = auth()->user()->id;
        $employee -> save();

        return redirect('/employees')->with('success', 'Employee added');

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit')->with('employee', $employee);
    }


    public function update(Request $request, $id)
    {

        $employee = Employee::find($id);
        $employee -> Name = $request -> input('name');
        $employee -> Address = $request -> input('address');
        $employee -> Phone = $request -> input('phone');
        $employee -> Designation = $request -> input('designation');

        $employee -> save();

        return redirect('/employees')->with('success', 'Employee updated');
    }


    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employees')->with('success', 'Employee removed');
    }
}
