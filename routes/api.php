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
/*User*/
Route::get('/getEverybody', 'UserController@getAll');
Route::get('/get/man/{id}', 'UserController@findOneByID');
Route::get('/get/man/{id}/lending', 'UserController@getLoaning');

/*Association*/
Route::get('/getEverySocieties', 'AssociationController@getAll');
Route::get('/get/{Society}/members', 'AssociationController@getMembers');
Route::get('/get/{Society}/stuffs', 'AssociationController@getStuffs');
Route::get('/get/society/{id}', 'AssociationController@findOneByID');
Route::get('get/society/{id}/stuff','AssociationController@getMaterials');

/*Category*/
Route::get('/getEverySorts','CategoryController@getAll');
Route::get('/get/{sort}/subSorts','CategoryController@getSubCategory');
Route::get('/get/sort/{id}', 'CategoryController@findOneByID');
Route::get('/get/sort/{id}/stuff','CategoryController@getMaterials');

/*SubCategory*/
Route::get('/getEverySubSorts','Sub_categoryController@getAll');
Route::get('/get/subSort/{id}', 'Sub_categoryController@findOneByID');

/*Material*/
Route::get('/getEveryStuffs', 'MaterialController@getAll');
Route::get('/get/stuff/{id}', 'MaterialController@findOneByID');

/*Loaning*/
Route::get('/getEveryLending' , 'LoaningController@getAll');
Route::get('/get/lending/{id}', 'LoaningController@findOneByID');



