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

Route::get('/InsertBook', 'PageController@insertBook');
Route::get('/ListBook', 'PageController@listBook');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth:staff');

Auth::routes();

/**
 *  Login web route
 *
 *  @middleware guest
 */
Route::group(['prefix' => 'login', 'as' => 'login.'], function ()
{
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('show.user');
    Route::post('/', 'Auth\LoginController@login')->name('user');
    Route::get('/staff', 'Auth\LoginController@showStaffLogin')->name('show.staff');
    Route::post('/staff', 'Auth\LoginController@loginStaff')->name('staff');
});

/**
 *  User related web routing
 *  + User dashboard
 *  + Book public list
 *  + User book rented/lent list
 *  + User profile
 *
 *  @middleware auth
 */
//Route::group(['prefix' => 'user', 'as' => 'user.'], function ()
//{
//
//})->middleware('auth');

/**
 *  Staff related web routing
 *  + Staff edit book list
 *  + All user rented book list
 *  + Add staff account
 *
 *  @middleware auth:staff
 */
//Route::group(['prefix' => 'staff', 'as' => 'staff.'], function ()
//{
//
//})->middleware('auth:staff');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/user', 'UserController@searchUser')->name('searchUser');
