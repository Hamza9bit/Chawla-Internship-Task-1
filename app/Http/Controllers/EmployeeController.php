<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::latest()->paginate(5);
        return view('employees.index',compact('employees'))
        ->with('i', (request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Address' => 'required',
            'Phone' => 'required',
        ]);
    

      Employee::create($request->all());

      return redirect()->route('employees.index')

      ->with('success', 'Employee created successfully.');
    }

public function show(Employee $employee) 
{
    return view('employees.show',compact('employee'));

}

public function edit(Employee $employee)
{
    return view('employees.edit',compact('employee'));
}

public function update(Request $request, Employee $employee)
{
    $request->validate([
 
    ]);

    $employee->update($request->all());

    return redirect()->route('employees.index')
        ->with('success', 'Employee updated successfully');

}

public function destroy(Employee $employee)
{
    $employee->delete();

   
return redirect()->route('employees.index')

->with('success', 'Employee deleted successfully');

}

}
