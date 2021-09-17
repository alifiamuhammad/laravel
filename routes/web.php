<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\aut_controller;
use App\Models\Dosen;
use App\Models\student;
use App\Models\Staff;

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
    return view('login/login');
});
Route::get('login',[aut_controller::class,'index']);
Route::post('proses_login',[aut_controller::class,'proses_login']);
Route::get('/admin',[AdminContoller::class,'index']);
Route::get('/dosen',[DosenController::class,'index']);
Route::get('/students',[StudentsController::class,'index']);
Route::get('/staff',[StaffController::class,'index']);
Route::get('/dosen/create',[DosenController::class,'create']);
Route::get('/students/create',[StudentsController::class,'create']);
Route::get('/staff/create',[StaffController::class,'create']);
Route::post('/dosen/store',[DosenController::class,'store']);
Route::post('/students/store',[StudentsController::class,'store']);
Route::post('/staff/store',[StaffController::class,'store']);
Route::delete('/dosen/{id}',[DosenController::class,'destroy']);
Route::delete('/students/{id}',[StudentsController::class,'destroy']);
Route::delete('/staff/{id}',[StaffController::class,'destroy']);

// Update
Route::get('/dosen/{id}/edit',[DosenController::class,'edit']);
Route::get('/students/{id}/edit',[StudentsController::class,'edit']);
Route::get('/staff/{id}/e  dit',[StaffController::class,'edit']);
Route::patch('/dosen/{id}/update',[DosenController::class,'update']);
Route::patch('/students/{id}/update',[StudentsController::class,'update']);
Route::patch('/staff/{id}/update',[StaffController::class,'update']);