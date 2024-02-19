<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //

    public function AddEmployee(Request $rec){
        Employee::create([
            'nama' => $req->nama,
            'umur' => $req->umur,
            'alamat' => $req->alamat,
        ]);

        return redirect('/');
    }

    public function ViewAllKaryawam(){
        $employee = Employee::all();

        return view('welcome')->with('employee_employee', 'employees');
    }
}