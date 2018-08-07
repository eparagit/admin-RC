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

          Route::get('/GetTourUpload','PagesController@GetTourUpload');

          Route::get('/GetTourStatus','PagesController@GetTourStatus');

          Route::get('/Admin','PagesController@Admin');

          Route::get('/Login','PagesController@Login');

          Route::get('/Internal','PagesController@Internal');

          Route::get('/GetRegisterUserAI','PagesController@GetRegisterUserAI');

          Route::get('/GetAdminUserView','PagesController@GetAdminUserView');

          Route::get('/GetStandardIUser','PagesController@GetStandardIUser');

          Route::get('/GetStandardEUser','PagesController@GetStandardEUser');

          Route::get('/GetUserByRol','PagesController@GetUserByRol');

          Route::get('/GetProfile','PagesController@GetProfile');

          Route::get('/GetEventType','PagesController@GetEventType');

          Route::get('/GetServiceType','PagesController@GetServiceType');

          Route::get('/GetTourCategory','PagesController@GetTourCategory');

          Route::get('/GetNoObjectInternal','PagesController@GetNoObjectInternal');

          Route::get('/GetRol','PagesController@GetRol');

          Route::get('/GetNewContract','PagesController@GetNewContract');

          Route::get('/GetRemainingContract','PagesController@GetRemainingContract');

          Route::get('/GetNewBooking','PagesController@GetNewBooking');

          Route::get('/GetRemainingBooking','PagesController@GetRemainingBooking');

          Route::get('/GetInternalLayout','PagesController@GetInternalLayout');

          Route::get('/GetInternalHeadLayout','PagesController@GetInternalHeadLayout');

          Route::get('/GetInternalHeaderLayout','PagesController@GetInternalHeaderLayout');

          Route::get('/GetInternalFooterLayout','PagesController@GetInternalFooterLayout');

          Route::get('/GetInternalSidebarLayout','PagesController@GetInternalSidebarLayout');

          Route::get('/GetMailBlade','PagesController@GetMailBlade');

          Route::get('/GetTheMostVisited','PagesController@GetTheMostVisited');
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

          Route::get('updateURol','UserController@updateURol');

          Route::get('selectUserByRol','UserController@selectUserByRol');
//______________
//TourCategoryController
          Route::get('insertNewCategory','TourCategoryController@insertNewCategory');

          Route::get('selectCatbyName','TourCategoryController@selectCatbyName');

          Route::get('selectTripCat','TourCategoryController@selectTripCat');

          Route::get('deleteTourCategory','TourCategoryController@deleteTourCategory');

          Route::get('selectTourCategoryByID','TourCategoryController@selectTourCategoryByID');

          Route::get('updateTourCategory','TourCategoryController@updateTourCategory');
//______________
//TourTypeController
          Route::get('selectTripType','TourTypeController@selectTripType');
//______________
//EventTypeController
          Route::get('insertNewEventType','EventTypeController@insertNewEventType');

          Route::get('deleteEventType','EventTypeController@deleteEventType');

          Route::get('selectEventType','EventTypeController@selectEventType');

          Route::get('selectEventTypeByID','EventTypeController@selectEventTypeByID');

          Route::get('updateEventType','EventTypeController@updateEventType');
//______________
//ServiceTypeController
          Route::get('insertNewServiceType','ServiceTypeController@insertNewServiceType');

          Route::get('deleteServiceType','ServiceTypeController@deleteServiceType');

          Route::get('selectServiceType','ServiceTypeController@selectServiceType');

          Route::get('selectServiceTypeByID','ServiceTypeController@selectServiceTypeByID');

          Route::get('updateServiceType','ServiceTypeController@updateServiceType');
//______________
//TourStatusController
          Route::get('insertNewTourStatus','TourStatusController@insertNewTourStatus');

          Route::get('deleteTourStatus','TourStatusController@deleteTourStatus');

          Route::get('selectTourStatusByID','TourStatusController@selectTourStatusByID');

          Route::get('updateTourStatus','TourStatusController@updateTourStatus');

          Route::get('selectTourStatus','TourStatusController@selectTourStatus');
//______________
//TourController
          Route::post('insertTour','TourController@insertTour');

          Route::get('ApproveTour','TourController@ApproveTour');

          Route::get('deleteTour','TourController@deleteTour');
<<<<<<< HEAD

          Route::get('selectTourForUpdate','TourController@selectTourForUpdate');

=======

          Route::get('selectTourForUpdate','TourController@selectTourForUpdate');

>>>>>>> bf352d0e6f8f291550eb99d7d09c3486a1292779
          Route::post('updateTour','TourController@updateTour');

          Route::get('selectNewTours','TourController@selectNewTours');
//______________
//SessionController
//Session Routes -Start//
          Route::get('session/get','SessionController@accessSessionData');
          Route::get('session/set','SessionController@storeSessionData');
          Route::get('session/remove','SessionController@deleteSessionData');
//Session Routes -End//
//______________
//contractController
          Route::get('selectNewContract','ContractController@selectNewContract');

          Route::get('selectRemainingContract','ContractController@selectRemainingContract');

          Route::get('updateIDStatus','ContractController@updateIDStatus');

          Route::get('ApproveContract','ContractController@ApproveContract');

          Route::get('ProcessContract','ContractController@ProcessContract');

          Route::get('RejectContract','ContractController@ProcessContract');

          Route::get('NotifyContractApproval','ContractController@NotifyContractApproval');

          Route::get('NotifyContractProcess','ContractController@NotifyContractProcess');

          Route::get('NotifyContractRejected','ContractController@NotifyContractRejected');
//______________
//StatusController
          Route::get('selectApprovedStatus','StatusController@selectApprovedStatus');
          Route::get('selectRejectedStatus','StatusController@selectRejectedStatus');
          Route::get('selectRemainingStatus','StatusController@selectRemainingStatus');
<<<<<<< HEAD
//_____________
=======
//______________
>>>>>>> bf352d0e6f8f291550eb99d7d09c3486a1292779
//BookingController
          Route::get('selectNewBooking','BookingController@selectNewBooking');

          Route::get('selectRemainingBooking','BookingController@selectRemainingBooking');

          Route::get('updateIDStatusB','BookingController@updateIDStatusB');
<<<<<<< HEAD

          Route::get('NotifyBookingRejected','BookingController@NotifyBookingRejected');

          Route::get('NotifyBookingProcess','BookingController@NotifyBookingProcess');

          Route::get('NotifyBookingApproval','BookingController@NotifyBookingApproval');

          Route::get('RejectBooking','BookingController@RejectBooking');

          Route::get('ProcessBooking','BookingController@ProcessBooking');

          Route::get('ApproveBooking','BookingController@ApproveBooking');

          Route::get('countRemainingBooking','BookingController@countRemainingBooking');
//_____________
=======

          Route::get('NotifyBookingRejected','BookingController@NotifyBookingRejected');

          Route::get('NotifyBookingProcess','BookingController@NotifyBookingProcess');

          Route::get('NotifyBookingApproval','BookingController@NotifyBookingApproval');

          Route::get('RejectBooking','BookingController@RejectBooking');

          Route::get('ProcessBooking','BookingController@ProcessBooking');

          Route::get('ApproveBooking','BookingController@ApproveBooking');

          Route::get('countRemainingBooking','BookingController@countRemainingBooking');
//______________
>>>>>>> bf352d0e6f8f291550eb99d7d09c3486a1292779
//SystemLogController
          Route::get('SystemLogRegistry','SystemLogController@SystemLogRegistry');
//______________

//Login and Logout Routes-Start
Route::get('redirectPath','AuthController@redirectPath');
Route::get('logoutS','AuthController@logoutS');
//Login and Logout Routes-End

Route::get('login', ['as'=>'login','uses'=>'PagesController@Login']);

Route::group(['middleware' => 'roles'], function () {
    Route::get('admin', ['as'=>'admin','uses'=>'PagesController@Admin']);
});
