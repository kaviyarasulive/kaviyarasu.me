<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('nodej')->user();

    //dd($users);

    return view('nodej.home');
})->name('home');

