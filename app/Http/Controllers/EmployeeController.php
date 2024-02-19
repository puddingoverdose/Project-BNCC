<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //

    public function AddEmplpyee(){
        return view('addEmployee');
    }

    public function StoreEmployee(Request $req){
        Employee::create([
            'nama' => $req->nama,
            'umur' => $req->umur,
            'alamat' => $req->alamat,
            'no_hp' => $req->no_hp,
        ]);

        return redirect('/');
    }

    public function ViewAllEmployee(){
        $employee = Employee::all();

        return view('welcome')->with('employee_employee', 'employees');
    }

    public function ViewEmployee($id){
        $employee = Employee::findOrFail($id);
 
        return view('EmployeeDetail')->with('employee', $employee);
    }

    public function editEmployee($id){
        $employee = Employee::findOrFail($id);

        return view('updateEmployee')->with('employee', $employee);
    }

    public function updateEmployee($id, Request $req){
        $Employee = Employee::findOrFail($id)->update([
            'nama' => $req->nama,
            'umur' => $req->umur,
            'alamat' => $req->alamat,
            'no_hp' => $req->no_hp,
        ]);

        return redirect('/');
    }

    public function deleteEmployee($id){
        Employee::destroy($id);

        return redirect('/');
    }
}