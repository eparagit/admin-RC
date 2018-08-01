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
//Go tour Status-Start
Route::get('/GoTourStatus','PagesController@GoTourStatus');
//Go Tour Status-End
//Go BC Status-Start
Route::get('/GoBCStatus','PagesController@GoBCStatus');
//Go BC Status-End
//Go EventType-Start
Route::get('/GoEventType','PagesController@GoEventType');
//Go EventType-End
//Go ServiceType-Start
Route::get('/GoServiceType','PagesController@GoServiceType');
//Go ServiceType-End
//Go TourCategory-Start
Route::get('/GoTourCategory','PagesController@GoTourCategory');
//Go TourCategory-End
//Go No Internal Object-Start
Route::get('/GoNoObjectI','PagesController@GoNoObjectI');
//Go No Internal Object-End

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
//Delete Trip Category-Start//
Route::get('deleteTourCategory','TripCatController@deleteTourCategory');
//Delete Trip Category-End//

//Insert Trip -Start//
Route::get('insertTrip','TripController@insertTrip');
//Insert Trip -End//

//Insert Trip Category-Start//
Route::get('insertNewCategory','TripCatController@insertNewCategory');
//Insert Trip Category-End//
//Select by Name Trip Category-Start//
Route::get('selectCatbyName','TripCatController@selectCatbyName');
//Select by Name Category-End//

//Insert New BCStatus-Start//
Route::get('insertNewBCSatus','BCStatusController@insertNewBCSatus');
//Insert New BCStatus-End//
//Delete BCStatus-Start//
Route::get('deleteBCStatus','BCStatusController@deleteBCStatus');
//Delete BCStatus-End//

//Insert New EventType-Start//
Route::get('insertNewEventType','EventTypeController@insertNewEventType');
//Insert New EventType-End//
//Delete EventType-Start//
Route::get('deleteEventType','EventTypeController@deleteEventType');
//Delete EventType-End//

//Insert New ServiceType-Start//
Route::get('insertNewServiceType','ServiceTypeController@insertNewServiceType');
//Insert New ServiceType-End//
//Delete ServiceType-Start//
Route::get('deleteServiceType','ServiceTypeController@deleteServiceType');
//Delete ServiceType-End//

//Insert New TourStatus-Start//
Route::get('insertNewTourStatus','TourStatusController@insertNewTourStatus');
//Insert New TourStatus-End//
//Delete TourStatus-Start//
Route::get('deleteTourStatus','TourStatusController@deleteTourStatus');
//Delete TourStatus-End//

//Approve Tour-Start//
Route::get('ApproveTour','TripController@ApproveTour');
//Approve Tour-End//

//Reject Tour-Start//
Route::get('deleteTour','TripController@deleteTour');
//Reject Tour-End//
//Update No image nor date Tour-Start//
Route::get('updateFormsNoimgdate','TripController@updateFormsNoimgdate');
//Update No image nor dateTour-End//


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

Route::post('updateFormsNoimgdate', [
  'as'=>'updatewimgdate',
  'uses' => 'TripController@updateFormsNoimgdate'
]);

//Product images upload-Start
Route::get('images-upload','ProductController@imagesUpload');
Route::get('images-upload','ProductController@imagesUploadPost')->name('images.upload');
Route::get('/GoProductUpload','PagesController@GoProductUpload');
//Product images upload-End

URL::asset('c:\xampp\htdocs\Admin-RC\public\Tours');

//Several Maintenance Routes-Start

Route::get('selectTourStatus','TourStatusController@selectTourStatus');

Route::get('selectServiceType','ServiceTypeController@selectServiceType');

Route::get('selectEventType','EventTypeController@selectEventType');

Route::get('selectBCStatus','BCStatusController@selectBCStatus');
//Several Maintenance Routes-End
