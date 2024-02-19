<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EmployeeController::class, 'ViewAllEmployee']);

Route::get('/add/employee', [EmployeeController::class, 'AddEmployee']);

Route::post('/store/employee', [EmployeeController::class, 'StoreEmployee']);

Route::get('/employee/{id}', [EmployeeController::class, 'ViewEmployee']);

Route::get('/edit/employee/{id}', [EmployeeController::class, 'editEmployee']);

Route::patch('/update/employee/{id}', [EmployeeController::class, 'updateEmployee']);

Route::delete('/delete/employee/{id}', [EmployeeController::class, 'deleteEmployee']);
