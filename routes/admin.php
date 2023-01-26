<?php


Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');



Route::group(['prefix' => 'AddCourse'], function () {
    Route::get('/create', 'Course\AddcourseController@index');
    Route::post('/create', 'Course\AddcourseController@create')->name('create');
    Route::get('/view', 'Course\AddcourseController@view')->name('view');
    Route::post('/update', 'Course\AddcourseController@update')->name('updateBooking');
    Route::get('/edit/{id}', 'Booking\BookingController@getbookingdetails')->name('editBooking');
    
});

Route::group(['prefix' => 'worker'], function () {
    Route::get('/create', 'Worker\WorkerController@index');
    Route::post('/create','Worker\WorkerController@create')->name('create');
    Route::get('/view', 'Worker\WorkerController@view');
    Route::get('/edit/{id}', 'Worker\WorkerController@getworkerdetails');
    Route::post('/update','Worker\WorkerController@update')->name('updateWorker');

});


Route::group(['prefix' => 'report'], function () {
    Route::get('/monthly_wish', 'Report\ReportController@index');
    // Route::post('/create','Worker\WorkerController@create')->name('create');
    // Route::get('/view', 'Worker\WorkerController@view');
    // Route::get('/edit/{id}', 'Worker\WorkerController@getworkerdetails');
    // Route::post('/update','Worker\WorkerController@update')->name('updateWorker');

});
   
   




Route::get('/send-mail','TestController@SendMail');
