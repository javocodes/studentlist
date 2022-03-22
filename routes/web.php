<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/student', [StudentController::class, 'Index'])->name('student.index');

// Login
Route::get('/student/loginview', [LoginController::class, 'show'])->name('student.loginview');
Route::post('/student/login', [LoginController::class, 'login'])->name('student.login');
Route::get('/student/logout', [LoginController::class, 'logout'])->name('student.logout');

//Register
Route::get('/student/register', [LoginController::class, 'ShowRegister'])->name('student.register');
Route::post('/student/register', [LoginController::class, 'Register'])->name('student.register');

//Student Routes
Route::get('/student/create', [StudentController::class, 'Create'])->name('student.create');
Route::post('/student/create', [StudentController::class, 'Save'])->name('student.save');
Route::get('/student/view', [StudentController::class, 'ViewStudent'])->name('student.view');
Route::get('/student/edit/{id}', [StudentController::class, 'EditStudent'])->name('student.edit');
Route::post('/student/update/{id}', [StudentController::class, 'UpdateStudent'])->name('student.update');
