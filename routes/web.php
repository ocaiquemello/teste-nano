<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TransactionController;
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
    Route::post('/admin/employees/create', [EmployeeController::class, 'create'])->name('admin.employee.create');
    Route::get('/admin/employees/edit/{id}', [EmployeeController::class, 'edit'])->name('admin.employee.edit');
    Route::post('/admin/employees/edit/{id}', [EmployeeController::class, 'update'])->name('admin.employee.update');
    Route::get('/admin/employees/delete/{id}', [EmployeeController::class, 'delete'])->name('admin.employee.delete');

    Route::get('/admin/transactions', [TransactionController::class, 'index'])->name('admin.transaction.index');
    Route::get('/admin/transactions/create', [TransactionController::class, 'register'])->name('admin.transaction.register');
    Route::post('/admin/transactions/create', [TransactionController::class, 'create'])->name('admin.transaction.create');
    Route::get('/admin/transactions/extract/{id}', [TransactionController::class, 'extract'])->name('admin.transaction.extract');
});
