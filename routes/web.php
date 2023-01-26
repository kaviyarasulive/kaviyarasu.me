<?php
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
    return view('welcome');
});


Route::get('/about', function () {
  return view('about');
});
Route::get('/contact', function () {
  return view('contact');
});

Route::get('/projects', function () {
  return view('projects');
});



Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});


Route::group(['prefix' => 'student'], function () {
  Route::get('/login', 'StudentAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'StudentAuth\LoginController@login');
  Route::post('/logout', 'StudentAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'StudentAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'StudentAuth\RegisterController@register');

  Route::post('/password/email', 'StudentAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'StudentAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'StudentAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'StudentAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'laravel'], function () {
  Route::get('/login', 'LaravelAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'LaravelAuth\LoginController@login');
  Route::post('/logout', 'LaravelAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'LaravelAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'LaravelAuth\RegisterController@register');

  Route::post('/password/email', 'LaravelAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'LaravelAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'LaravelAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'LaravelAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'django'], function () {
  Route::get('/login', 'DjangoAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'DjangoAuth\LoginController@login');
  Route::post('/logout', 'DjangoAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'DjangoAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'DjangoAuth\RegisterController@register');

  Route::post('/password/email', 'DjangoAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'DjangoAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'DjangoAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'DjangoAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'nodej'], function () {
  Route::get('/login', 'NodejAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'NodejAuth\LoginController@login');
  Route::post('/logout', 'NodejAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'NodejAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'NodejAuth\RegisterController@register');

  Route::post('/password/email', 'NodejAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'NodejAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'NodejAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'NodejAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'figma'], function () {
  Route::get('/login', 'FigmaAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'FigmaAuth\LoginController@login');
  Route::post('/logout', 'FigmaAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'FigmaAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'FigmaAuth\RegisterController@register');

  Route::post('/password/email', 'FigmaAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'FigmaAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'FigmaAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'FigmaAuth\ResetPasswordController@showResetForm');
});
