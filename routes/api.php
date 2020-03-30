<?php

use Illuminate\Http\Request;
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

Route::get('/getEverybody', 'UserController@getAll');
Route::get('/getEverySocieties', 'AssociationController@getAll');
Route::get('/getEverySorts','CategoryController@getAll');
Route::get('/getEverySubSorts','Sub_categoryController@getAll');
Route::get('/getEveryStuffs', 'MaterialController@getAll');
Route::get('/getEveryLending' , 'LoaningController@getAll');
Route::get('/get/{Society}/members', 'AssociationController@getMembers');
Route::get('/get/{Society}/stuffs', 'AssociationController@getStuffs');
