<?php

use Illuminate\Support\Facades\Route;
Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('student')->user();

    //dd($users);

    return view('student.home');
})->name('home');


// Route::get('/course', function () {
//     return view('student.Course.view');
// });
Route::get('/course', 'Course\CourseController@index');
Route::get('/test', 'Course\CourseController@test');
Route::get('/assignment', 'Course\CourseController@assignment');
Route::get('/html', 'Course\CourseController@html');
Route::get('/javascript', 'Course\CourseController@javascript');
Route::get('/react', 'Course\CourseController@react');
Route::get('/tailwind', 'Course\CourseController@tailwind');
Route::get('/GitHub', 'Course\CourseController@GitHub');
Route::get('/linux', 'Course\CourseController@linux');
Route::get('/nodejs', 'Course\CourseController@nodejs');
Route::get('/nextjs', 'Course\CourseController@nextjs');
Route::get('/Advancenextjs', 'Course\CourseController@Advancenextjs');
Route::get('/Rediscatching', 'Course\CourseController@Rediscatching');

Route::get('/test', 'Course\TestController@index');
