<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('laravel')->user();

    //dd($users);

    return view('laravel.home');
})->name('home');

