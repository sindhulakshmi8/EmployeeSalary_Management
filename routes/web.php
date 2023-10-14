<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::redirect('/', 'login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => '/Dashboard', 'middleware' => ['auth']], function () { 
Route::get('/', [App\Http\Controllers\DashboardController::class, 'Dashboard'])->name('Dashboard');
});

#Manage Employee
Route::group(['prefix' => '/Employee', 'middleware' => ['auth']], function () { 
Route::get('/Employeelist', [App\Http\Controllers\EmployeeController::class, 'Employeelist'])->name('employee.list');
Route::get('/createemployee', [App\Http\Controllers\EmployeeController::class, 'add'])->name('employee.add');
Route::post('/save', [App\Http\Controllers\EmployeeController::class, 'save'])->name('employee.save');
Route::get('/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/update', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');
Route::get('/delete/{id}', [App\Http\Controllers\EmployeeController::class, 'delete'])->name('employee.delete');


});

#manage salary
Route::group(['prefix' => '/Salary', 'middleware' => ['auth']], function () { 
Route::get('/Salarylist', [App\Http\Controllers\SalaryController::class, 'Salarylist'])->name('salary.list');
Route::get('/add', [App\Http\Controllers\SalaryController::class, 'add'])->name('salary.add');
Route::post('/save', [App\Http\Controllers\SalaryController::class, 'save'])->name('salary.save');
Route::get('/edit/{id}', [App\Http\Controllers\SalaryController::class, 'edit'])->name('salary.edit');
Route::post('/update', [App\Http\Controllers\SalaryController::class, 'update'])->name('salary.update');
Route::get('/delete/{id}', [App\Http\Controllers\SalaryController::class, 'delete'])->name('salary.delete');


});
