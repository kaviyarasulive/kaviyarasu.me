<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('figma')->user();

    //dd($users);

    return view('figma.home');
})->name('home');

