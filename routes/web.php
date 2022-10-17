<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('student', [StudentController::class,'index']);

Route::get('student/create',[StudentController::class,'create']); //Hien thi form

Route::post('student/create',[StudentController::class,'get_all_student']);//luu du lieu

Route::get('student/edit/{id}',[StudentController::class,'edit']);//edit

Route::post('update-student/{id}', [StudentController::class, 'update']);

Route::get('delete-student/{id}', [StudentController::class, 'destroy']);