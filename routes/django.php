<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('django')->user();

    //dd($users);

    return view('django.home');
})->name('home');

