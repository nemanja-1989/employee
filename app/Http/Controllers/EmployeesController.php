<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate(5);
        return view("employees.index", [
            "employees" => $employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("employees.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            "first_name" => ["required"],
            "last_name" => ["required"],
            "birth_date" => ["required"],
            "gender" => ["required"],
            "hire_date" => ["required"]
        ]);

        $employee = Employee::create($data);

        return redirect()->route("employees.index")->with("success", "$employee->first_name was created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::whereId($id)->first();
        return view("employees.edit", [
            "employee" => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            "first_name" => ["required"],
            "last_name" => ["required"],
            "birth_date" => ["required"],
            "gender" => ["required"],
            "hire_date" => ["required"]
        ]);

        $employee = Employee::whereId($id)->first();
        $employee->update($data);

        return redirect()->route("employees.index")->with("success", "$employee->first_name was updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::whereId($id)->first();
        $employee->delete();

        return redirect()->route("employees.index")->with("danger", "$employee->first_name was deleted successfully!");
    }
}
