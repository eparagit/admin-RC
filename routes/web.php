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

Route::get('/GoUserbyr','PagesController@GoUserbyr');


Route::get('/GoProfile','PagesController@GoProfile');

//Route::get('selectRol','RolController@selectRol');

//Start tourU
Route::get('/GoTourU','PagesController@GoTourU');
//End tourU
//Start tourAprl
Route::get('/GoTourAprl','PagesController@GoTourAprl');
//End tourAprl
//Start tourAprl-id
Route::get('/GoTourAprlid','PagesController@GoTourAprlid');
//End tourAprl-id

//Start UpdateTourAp-Start
Route::get('/GoUpdateTwAp','PagesController@GoUpdateTwAp');
//Start UpdateTourAp-End



Route::get('selectRol','RolController@selectRol');

Route::get('selectTripType','TripTypeController@selectTripType');

//Select Trip Category-Start//
Route::get('selectTripCat','TripCatController@selectTripCat');
//Select Trip Category-End//

//Insert Trip -Start//
Route::get('insertTrip','TripController@insertTrip');
//Insert Trip -End//

//Insert Trip Category-Start//
Route::get('insertNewCategory','TripCatController@insertNewCategory');
//Insert Trip Category-End//


//Approve Tour-Start//
Route::get('ApproveTour','TripController@ApproveTour');
//Approve Tour-End//

//Reject Tour-Start//
Route::get('deleteTour','TripController@deleteTour');
//Reject Tour-End//


//selectTuorToApr-Start//
Route::get('selectTuorToApr','TripController@selectTuorToApr');
//selectTuorToApr-End//

//selectTuorAprToUpdate-Start//
Route::get('selectTuorToUpdateApp','TripController@selectTuorToUpdateApp');
//selectTuorAprToUpdate-End//




Route::get('selectAllRol','RolController@selectAllRol');

Route::get('selectRolByID','RolController@selectRolByID');

Route::get('selectAdUser','UserController@selectAdUser');

Route::get('selectISUser','UserController@selectISUser');

Route::get('selectESUser','UserController@selectESUser');

Route::get('selectUserByEmail','UserController@selectUserByEmail');

Route::get('updateUser','UserController@updateUser');
//Update User Rol -Start
Route::get('updateURol','UserController@updateURol');
//Update User Rol -End



Route::get('selectUserByRol','UserController@selectUserByRol');

Route::get('selectUserByID','UserController@selectUserByID');

Route::get('validateNewUser','UserController@validateNewUser');

Route::get('createUser', 'UsersController@validateNewUser');

Route::get('/Product','PagesController@Product');

Route::get('selectProduct','ProductController@selectProduct');


Route::get('/GoNProduct','PagesController@GoNProduct');

Route::get('/addproduct','ProductController@AddProduct');

Route::get('/Product/readProducts','PagesController@readProducts');

//Login and Logout Routes-Start
Route::get('redirectPath','AuthController@redirectPath');
Route::get('logoutS','AuthController@logoutS');
//Login and Logout Routes-End

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
