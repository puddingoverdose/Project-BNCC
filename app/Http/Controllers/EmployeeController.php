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
}