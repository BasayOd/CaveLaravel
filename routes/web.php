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
Route::name('user.')->group(function (){
    Route::view('/private','private' )->middleware('auth')->name('private');
    Route::get('user/login', 'UserController@showLogin')->name('login');
    Route::get('user/register','UserController@showRegister')->name('register');
});
