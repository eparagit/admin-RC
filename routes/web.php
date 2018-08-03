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
//PagesController
          //Start tourU
          Route::get('/GetTourUpload','PagesController@GetTourUpload');
          //End tourU
          //Go tour Status-Start
          Route::get('/GetTourStatus','PagesController@GetTourStatus');
          //Go Tour Status-End
          Route::get('/Admin','PagesController@Admin');

          Route::get('/Login','PagesController@Login');

          Route::get('/Internal','PagesController@Internal');

          Route::get('/GetRegisterUserAI','PagesController@GetRegisterUserAI');



          Route::get('/GoTaup','PagesController@GoTaup');

          Route::get('/GetAdminUserView','PagesController@GetAdminUserView');

          Route::get('/GetStandardIUser','PagesController@GetStandardIUser');

          Route::get('/GetStandardEUser','PagesController@GetStandardEUser');

          Route::get('/GetUserByRol','PagesController@GetUserByRol');


          Route::get('/GetProfile','PagesController@GetProfile');
          Route::get('/GetBookingContractStatus','PagesController@GetBookingContractStatus');
          //Go BC Status-End
          //Go EventType-Start
          Route::get('/GetEventType','PagesController@GetEventType');
          //Go EventType-End
          //Go ServiceType-Start
          Route::get('/GetServiceType','PagesController@GetServiceType');
          //Go ServiceType-End
          //Go TourCategory-Start
          Route::get('/GetTourCategory','PagesController@GetTourCategory');
          //Go TourCategory-End
          //Go No Internal Object-Start
          Route::get('/GetNoObjectInternal','PagesController@GetNoObjectInternal');
          //Go No Internal Object-End

          //Start tourAprl
          Route::get('/GoTourAprl','PagesController@GoTourAprl');
          //End tourAprl
          //Start tourAprl-id
          Route::get('/GetTourToApprove','PagesController@GetTourToApprove');
          //End tourAprl-id
          //Start UpdateTourAp-Start
          Route::get('/GoUpdateTwAp','PagesController@GoUpdateTwAp');
          //Start UpdateTourAp-End
          Route::get('/GetRol','PagesController@GetRol');
//______________
//AuthController
//______________
//UserController
          Route::get('selectAdUser','UserController@selectAdUser');

          Route::get('selectISUser','UserController@selectISUser');

          Route::get('selectESUser','UserController@selectESUser');

          Route::get('selectUserByEmail','UserController@selectUserByEmail');

          Route::get('updateUser','UserController@updateUser');

          Route::get('selectUserByID','UserController@selectUserByID');

          Route::get('validateNewUser','UserController@validateNewUser');

          Route::get('createUser', 'UsersController@validateNewUser');
//______________
//RolController

          Route::get('selectRol','RolController@selectRol');
          Route::get('selectAllRol','RolController@selectAllRol');

          Route::get('selectRolByID','RolController@selectRolByID');
          //Update User Rol -Start
          Route::get('updateURol','UserController@updateURol');
          //Update User Rol -End
          Route::get('selectUserByRol','UserController@selectUserByRol');
//______________
//BookingContractController
          //Insert New BCStatus-Start//
          Route::get('insertNewBCSatus','BookingContractController@insertNewBCSatus');
          //Insert New BCStatus-End//
          //Delete BCStatus-Start//
          Route::get('deleteBCStatus','BookingContractController@deleteBCStatus');
          //Delete BCStatus-End//
          //Select BCStatusByID-Start//
          Route::get('selectBCStatusByID','BookingContractController@selectBCStatusByID');
          //Select BCStatusByID-End//
          Route::get('selectBCStatus','BookingContractController@selectBCStatus');
//______________
//TourCategoryController
          //Insert Trip Category-Start//
          Route::get('insertNewCategory','TourCategoryController@insertNewCategory');
          //Insert Trip Category-End//
          //Select by Name Trip Category-Start//
          Route::get('selectCatbyName','TourCategoryController@selectCatbyName');
          //Select by Name Category-End//
          //Select TourCategory-Start//
          Route::get('selectTripCat','TourCategoryController@selectTripCat');
          //Select TourCategory-End//
          //Delete TourCategory-Start//
          Route::get('deleteTourCategory','TourCategoryController@deleteTourCategory');
          //Delete TourCategory-End//
//______________
//TourTypeController
          //Select TourType-Start//
          Route::get('selectTripType','TourTypeController@selectTripType');
          //Select TourType-End//

//______________
//TuorController
          //Insert Tour-Start//
          Route::get('insertTrip','TourController@insertTrip');
          //Insert Tour-End//
          //Approve Tour-Start//
          Route::get('ApproveTour','TourController@ApproveTour');
          //Approve Tour-End//
          //Reject Tour-Start//
          Route::get('deleteTour','TourController@deleteTour');
          //Reject Tour-End//
          //selectTuorToApr-Start//
          Route::get('selectTuorToApr','TourController@selectTuorToApr');
          //selectTuorToApr-End//

          //selectTuorAprToUpdate-Start//
          Route::get('selectTuorToUpdateApp','TourController@selectTuorToUpdateApp');
          //selectTuorAprToUpdate-End//
//______________
//EventTypeController
          //Insert New EventType-Start//
          Route::get('insertNewEventType','EventTypeController@insertNewEventType');
          //Insert New EventType-End//
          //Delete EventType-Start//
          Route::get('deleteEventType','EventTypeController@deleteEventType');
          //Delete EventType-End//
          Route::get('selectEventType','EventTypeController@selectEventType');
//______________
//ServiceTypeController
          //Insert New ServiceType-Start//
          Route::get('insertNewServiceType','ServiceTypeController@insertNewServiceType');
          //Insert New ServiceType-End//
          //Delete ServiceType-Start//
          Route::get('deleteServiceType','ServiceTypeController@deleteServiceType');
          //Delete ServiceType-End//
          Route::get('selectServiceType','ServiceTypeController@selectServiceType');
//______________
//TourStatusController
          //Insert New TourStatus-Start//
          Route::get('insertNewTourStatus','TourStatusController@insertNewTourStatus');
          //Insert New TourStatus-End//
          //Delete TourStatus-Start//
          Route::get('deleteTourStatus','TourStatusController@deleteTourStatus');
          //Delete TourStatus-End//
          Route::get('selectTourStatus','TourStatusController@selectTourStatus');
//______________
//SessionController
//Session Routes -Start//
          Route::get('session/get','SessionController@accessSessionData');
          Route::get('session/set','SessionController@storeSessionData');
          Route::get('session/remove','SessionController@deleteSessionData');
//Session Routes -End//
//______________
//AuthController
//______________

//Route::get('selectRol','RolController@selectRol');











//Update No image nor date Tour-Start//
Route::get('updateFormsNoimgdate','TripController@updateFormsNoimgdate');
//Update No image nor dateTour-End//

//Login and Logout Routes-Start
Route::get('redirectPath','AuthController@redirectPath');
Route::get('logoutS','AuthController@logoutS');
//Login and Logout Routes-End

Route::get('login', ['as'=>'login','uses'=>'PagesController@Login']);


Route::group(['middleware' => 'roles'], function () {
    Route::get('admin', ['as'=>'admin','uses'=>'PagesController@Admin']);
});




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
