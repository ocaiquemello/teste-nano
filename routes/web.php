<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
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
    return view('index');
})->name('index');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/employees', [EmployeeController::class, 'index'])->name('admin.employee.index');
    Route::get('/admin/employees/create', [EmployeeController::class, 'register'])->name('admin.employee.register');
    Route::get('/admin/employees/edit/{id}', [EmployeeController::class, 'edit'])->name('admin.employee.edit');
    Route::post('/admin/employees/edit/{id}', [EmployeeController::class, 'update'])->name('admin.employee.update');
    Route::post('/admin/employees/create', [EmployeeController::class, 'create'])->name('admin.employee.create');
    Route::get('/admin/employees/delete/{id}', [EmployeeController::class, 'delete'])->name('admin.employee.delete');

});
