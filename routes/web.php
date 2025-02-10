<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Student Routes
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/student/add', [StudentController::class, 'create'])->name('students.create');
Route::post('/student/add', [StudentController::class, 'store'])->name('students.store');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
Route::patch('/student/update/{id}', [StudentController::class, 'update'])->name('students.update');
Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('students.delete');



