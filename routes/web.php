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
});


Route::get('login', 'App\Http\Controllers\LoginController@index');
Route::get('login/{provider}', 'App\Http\Controllers\LoginController@redirectToProvider');
Route::get('{provider}/callback', 'App\Http\Controllers\LoginController@handleProviderCallback');
Route::get('/home', function () {
    return '<a href="logout">Logout</a>User is logged in';

});

// Route::get('logout', function () {
    
// });
Route::get('logout', 'App\Http\Controllers\LoginController@logout');