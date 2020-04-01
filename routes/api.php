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
Route::delete('delete/man/{id}','UserController@deleteOne');
Route::post('new/man','UserController@createOne');

/*Association*/
Route::get('/getEverySocieties', 'AssociationController@getAll');
Route::get('/get/{Society}/members', 'AssociationController@getMembers');
Route::get('/get/{Society}/stuffs', 'AssociationController@getStuffs');
Route::get('/get/society/{id}', 'AssociationController@findOneByID');
Route::get('get/society/{id}/stuff','AssociationController@getMaterials');
Route::delete('delete/society/{id}','AssociationController@deleteOne');
Route::post('new/society','AssociationController@createOne');

/*Category*/
Route::get('/getEverySorts','CategoryController@getAll');
Route::get('/get/{sort}/subSorts','CategoryController@getSubCategory');
Route::get('/get/sort/{id}', 'CategoryController@findOneByID');
Route::get('/get/sort/{id}/stuff','CategoryController@getMaterials');
Route::delete('delete/sort/{id}','CategoryController@deleteOne');
Route::post('new/sort','CategoryController@createOne');

/*SubCategory*/
Route::get('/getEverySubSorts','Sub_categoryController@getAll');
Route::get('/get/subSort/{id}', 'Sub_categoryController@findOneByID');
Route::delete('delete/subSort/{id}','Sub_categoryController@deleteOne');
Route::post('/new/subSort','Sub_categoryController@createOne');

/*Material*/
Route::get('/getEveryStuffs', 'MaterialController@getAll');
Route::get('/get/stuff/{id}', 'MaterialController@findOneByID');
Route::delete('delete/stuff/{id}','MaterialController@deleteOne');
Route::post('/new/stuff','MaterialController@createOne');


/*Loaning*/
Route::get('/getEveryLending' , 'LoaningController@getAll');
Route::get('/get/lending/{id}', 'LoaningController@findOneByID');
Route::delete('delete/lending/{id}','LoaningController@deleteOne');
Route::post('/new/lending','LoaningController@createOne');



