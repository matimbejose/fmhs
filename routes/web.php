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
    return view('home');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/getusers', 'UserController@showUsers');
Route::resource('/users', 'UserController');

Route::get('/getstudents', 'StudentController@showStudents');
Route::resource('/students', 'StudentController');




Route::get('/getteacher', 'TeacherController@showTeacher');
Route::resource('/teachers', 'TeacherController');

Route::get('/getclasse', 'ClasseController@showClasses');
Route::resource('/classes', 'ClasseController');

Route::get('/getcourse', 'CourseController@showCourses');
Route::resource('/coures', 'CourseController');

Route::get('/getschedule', 'ScheduleController@showSchedule');
Route::resource('/schedules', 'ScheduleController');


Auth::routes();

