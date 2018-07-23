<?php

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
Route::get('/Admin','PagesController@Admin');

Route::get('/Login','PagesController@Login');

Route::get('/Internal','PagesController@Internal');

Route::get('/GoReg','PagesController@GoReg');

Route::get('/GoRol','PagesController@GoRol');

Route::get('/GoTaup','PagesController@GoTaup');

Route::get('/GoAdminU','PagesController@GoAdminU');

Route::get('/GoSIU','PagesController@GoSIU');

Route::get('/GoSEU','PagesController@GoSEU');

Route::get('/GoProfile','PagesController@GoProfile');

//Route::get('selectRol','RolController@selectRol');

//Start tourU
Route::get('/GoTourU','PagesController@GoTourU');
//End tourU


Route::get('selectRol','RolController@selectRol');

Route::get('selectTripType','TripTypeController@selectTripType');

//Select Trip Category-Start//
Route::get('selectTripCat','TripCatController@selectTripCat');
//Select Trip Category-End//

//Insert Trip Category-Start//
Route::get('insertTrip','TripController@insertTrip');
//Insert Trip Category-End//


Route::get('selectAllRol','RolController@selectAllRol');

Route::get('selectRolByID','RolController@selectRolByID');

Route::get('selectAdUser','UserController@selectAdUser');

Route::get('selectISUser','UserController@selectISUser');

Route::get('selectESUser','UserController@selectESUser');

Route::get('selectUserByEmail','UserController@selectUserByEmail');

Route::get('updateUser','UserController@updateUser');



Route::get('validateNewUser','UserController@validateNewUser');

Route::get('createUser', 'UsersController@validateNewUser');

Route::get('/Product','PagesController@Product');

Route::get('selectProduct','ProductController@selectProduct');


Route::get('/GoNProduct','PagesController@GoNProduct');

Route::get('/addproduct','ProductController@AddProduct');

Route::get('/Product/readProducts','PagesController@readProducts');

Route::get('redirectPath','AuthController@redirectPath');

Route::get('login', ['as'=>'login','uses'=>'PagesController@Login']);


Route::group(['middleware' => 'roles'], function () {
    Route::get('admin', ['as'=>'admin','uses'=>'PagesController@Admin']);
});

//Session Routes -Start//
Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');
//Session Routes -End//


Route::post('fileUpload', [
  'as'=>'image.add',
  'uses' => 'TripController@fileUpload'
]);
