<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('index');
});

Route::group(['prefix'=>'department'], function(){
    Route::get('/index', [DepartmentController::class, 'index'])->name('department.index');
    Route::get('/create', [DepartmentController::class, 'create'])->name('create.department');
    Route::post('/store', [DepartmentController::class, 'store'])->name('store.department');
    Route::get('/delete/{id}',[DepartmentController::class, 'delete'])->name('delete.department');
    Route::get('/restore/{id}',[DepartmentController::class, 'restore'])->name('restore.department');
    Route::get('/parmanet/delete/{id}',[DepartmentController::class, 'PDelete'])->name('PDelete.department');
    Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('edit.department');
    Route::post('/update/{id}', [DepartmentController::class, 'update'])->name('update.department');
    Route::get('/trash', [DepartmentController::class, 'trash'])->name('department.trash');
});

Route::group(['prefix'=>'employee'], function(){
    Route::get('/index', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('create.employee');
    Route::post('/store', [EmployeeController::class, 'store'])->name('store.employee');
    Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete.employee');

    Route::get('/restore/{id}',[EmployeeController::class, 'restore'])->name('restore.employee');
    Route::get('/parmanet/delete/{id}',[EmployeeController::class, 'PDelete'])->name('PDelete.employee');

    Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('edit.employee');
    Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('update.employee');
    Route::get('/view/{id}', [EmployeeController::class, 'view'])->name('view.employee');

    Route::get('/trash', [EmployeeController::class, 'trash'])->name('employee.trash');
});





