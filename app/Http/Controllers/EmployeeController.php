<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function index(){
        $employees = Employee::all();
        return view('index', compact('employees'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'country_code' => 'required',
            'mobile_number' => 'required',
            'address' => 'required|string',
            'gender' => 'required',
            'hobbies' => 'nullable|array',
            'photo' => 'nullable|image'
        ]);

        if($request->photo){
            $photoPath = $request->file('photo')->store('photos', 'public');
        } else {
            $photoPath = null;
        }

        Employee::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'country_code' => $request->country_code,
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'gender' => $request->gender,
            'hobbies' => $request->hobbies,
            'photo' => $photoPath,
        ]);

        return redirect()->route('employee.index')->with('success','Employee Created Successfully');
    }

    public function edit(Employee $employee){

        return view('edit', compact('employee'));
    }

    public function update(Request $request){
        
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'country_code' => 'required',
            'mobile_number' => 'required',
            'address' => 'required|string',
            'gender' => 'required',
            'hobbies' => 'required|array',
            'photo' => 'nullable|image'
        ]);

        if($request->photo){
            $photoPath = $request->file('photo')->store('photos', 'public');
        } else {
            $photoPath = null;
        }

        Employee::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'country_code' => $request->country_code,
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'gender' => $request->gender,
            'hobbies' => $request->hobbies,
            'photo' => $photoPath,
        ]);

        return redirect()->route('employee.index')->with('success','Employee Updates Successfully');
    }

    public function destroy(Employee $employee){
        $employee->delete();
        return redirect()->route('index')->with('success', 'Employee Deleted Successfully');
    }
}

