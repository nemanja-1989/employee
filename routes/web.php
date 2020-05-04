<?php

use Illuminate\Support\Facades\Route;
use App\Dept_emp;

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

Route::get("read", function() {
    dd(Dept_emp::get());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//EmployeesController
Route::get("/employees/truncate", "EmployeesController@truncate")->name("employees.truncate");
Route::resource("employees", "EmployeesController");
