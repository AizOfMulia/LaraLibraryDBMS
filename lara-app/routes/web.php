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
    return view('welcome');
})->middleware('staffonly');

Auth::routes();

Route::group(['prefix' => 'login', 'as' => 'login.'], function ()
{
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('show.user');
    Route::post('/', 'Auth\LoginController@login')->name('user');
    Route::get('/staff', 'Auth\LoginController@showStaffLogin')->name('show.staff');
    Route::post('/staff', 'Auth\LoginController@loginStaff')->name('staff');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/user', 'UserController@searchUser')->name('searchUser');
