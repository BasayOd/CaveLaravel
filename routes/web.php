<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Main;

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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('main');
    Route::get('/{selected}', 'IndexController@sort')->name('main.category.sort');
});
Route::group(['namespace' => 'User'], function (){
    Route::get('user/login', 'LoginController@show')->name('user.login');
    Route::post('user/login','LoginController@login');

    Route::get('user/register','RegisterController@show')->name('user.register');
    Route::post('user/register','RegisterController@store');

    Route::get('user/logout', 'LoginController@logout')->name('user.logout');
});

