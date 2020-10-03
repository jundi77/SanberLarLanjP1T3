<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::namespace('Auth')->group(function () {
	Route::post('register', 'RegisterController');
	Route::post('login', 'LoginController');
	Route::post('logout', 'LogoutController');
});

Route::namespace('Perpus')->group(function() {
	Route::post('borrow/store', 'BorrowController@store');
	Route::get('borrow/show', 'BorrowController@show');
	Route::put('borrow/update', 'BorrowController@update');
	Route::delete('borrow/delete', 'BorrowController@destroy');
});

Route::get('user', 'UserController');
