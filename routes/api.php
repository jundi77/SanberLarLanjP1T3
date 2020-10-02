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
	Route::post('borrow/store', 'Perpus\BorrowController@store');
	Route::put('borrow/show', 'Perpus\BorrowController@store');
	Route::put('borrow/update', 'Perpus\BorrowController@store');
	Route::delete('borrow/delete', 'Perpus\BorrowController@store');
});

Route::get('user', 'UserController');
