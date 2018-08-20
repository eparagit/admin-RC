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

          Route::get('/GetTourToApprove','PagesController@GetTourToApprove');

          Route::get('/GetProductInsertBlade','PagesController@GetProductInsertBlade');

          Route::get('/GetProductUpdate','PagesController@GetProductUpdate');

          Route::get('/GetTourToApprove','PagesController@GetTourToApprove');

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

          Route::get('/GetApprovedBookingReport','PagesController@GetApprovedBookingReport');

          Route::get('/GetSystemLogReport','PagesController@GetSystemLogReport');

          Route::get('/GetEmployeesReport','PagesController@GetEmployeesReport');

          Route::get('/GetTheMostVisited','PagesController@GetTheMostVisited');

          Route::get('/GetTourReport','PagesController@GetTourReport');

          Route::get('/GetHiringReport','PagesController@GetHiringReport');

          Route::get('/GetProductReport','PagesController@GetProductReport');

          Route::get('/GetStatisticsRating','PagesController@GetStatisticsRating');

          Route::get('/GetStatisticsNvsI','PagesController@GetStatisticsNvsI');

          Route::get('/GetStatisticsVisited','PagesController@GetStatisticsVisited');

          Route::get('/GetFirstPasswordChange','PagesController@GetFirstPasswordChange');

		      Route::get('/GetReminderNotifications','PagesController@GetReminderNotifications');

          Route::get('/GetNoObjectAdmin','PagesController@GetNoObjectAdmin');

          Route::get('/GetAdminPassChange','PagesController@GetAdminPassChange');

          Route::get('/GetInternalPassChange','PagesController@GetInternalPassChange');

          Route::get('/GetContractNotification ','PagesController@GetContractNotification');

          Route::get('/GetNotAllowedBlade','PagesController@GetNotAllowedBlade');

          Route::get('/GetBookingReport','PagesController@GetBookingReport');

          Route::get('/GetContractReport','PagesController@GetContractReport');

          Route::get('/GetExternalUsersReport','PagesController@GetExternalUsersReport');

          Route::get('/GetAdminAbout','PagesController@GetAdminAbout');

          Route::get('/GetInternalAbout','PagesController@GetInternalAbout');
//______________
//AuthController
          Route::get('/restorePassword','AuthController@restorePassword');        
//______________
//UserController
          Route::get('selectAdUser','UserController@selectAdUser');

          Route::get('selectISUser','UserController@selectISUser');

          Route::get('selectESUser','UserController@selectESUser');

          Route::get('selectUserByEmail','UserController@selectUserByEmail');

          Route::get('updateUser','UserController@updateUser');

          Route::get('selectUserByID','UserController@selectUserByID');

          Route::get('validateNewUser','UserController@validateNewUser');

          Route::get('createUser', 'UserController@validateNewUser');

          Route::get('selectUsersReportByRol', 'UserController@selectUsersReportByRol');

          Route::get('registerUser', 'UserController@registerUser');

          Route::get('PasswordReset', 'UserController@PasswordReset');

          Route::get('selectExternalUserReport', 'UserController@selectExternalUserReport');


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

          Route::get('selectRejectedTourStatus','TourStatusController@selectRejectedTourStatus');
//______________
//TourController
          Route::post('insertTour','TourController@insertTour');

          Route::get('ApproveTour','TourController@ApproveTour');

          Route::get('deleteTour','TourController@deleteTour');

          Route::get('selectTourForUpdate','TourController@selectTourForUpdate');

          Route::post('updateTour','TourController@updateTour');

          Route::get('selectNewTours','TourController@selectNewTours');

          Route::get('rejectTour','TourController@rejectTour');

          Route::get('RemainingTourCounter','TourController@RemainingTourCounter');

          Route::get('selectTourReport','TourController@selectTourReport');
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

          Route::get('selectNewContractToApprove','ContractController@selectNewContractToApprove');

          Route::post('approvalNewContract','ContractController@approvalNewContract');

          Route::get('RemainingContractCounter','ContractController@RemainingContractCounter');

          Route::get('NewContractCounter','ContractController@NewContractCounter');

          Route::get('ContractCounter','ContractController@ContractCounter');

          Route::get('selectContractReport','ContractController@selectContractReport');
//______________
//StatusController
          Route::get('selectApprovedStatus','StatusController@selectApprovedStatus');
          Route::get('selectRejectedStatus','StatusController@selectRejectedStatus');
          Route::get('selectRemainingStatus','StatusController@selectRemainingStatus');
//_____________
//BookingController
          Route::get('selectNewBooking','BookingController@selectNewBooking');

          Route::get('selectRemainingBooking','BookingController@selectRemainingBooking');

          Route::get('updateIDStatusB','BookingController@updateIDStatusB');

          Route::get('NotifyBookingRejected','BookingController@NotifyBookingRejected');

          Route::get('NotifyBookingProcess','BookingController@NotifyBookingProcess');

          Route::get('RejectBooking','BookingController@RejectBooking');

          Route::get('ProcessBooking','BookingController@ProcessBooking');

          Route::get('ApproveBooking','BookingController@ApproveBooking');

          Route::get('NotifyBookingRejected','BookingController@NotifyBookingRejected');

          Route::get('NotifyBookingProcess','BookingController@NotifyBookingProcess');

          Route::get('NotifyBookingApproval','BookingController@NotifyBookingApproval');

          Route::get('RejectBooking','BookingController@RejectBooking');

          Route::get('ProcessBooking','BookingController@ProcessBooking');

          Route::get('selectReportForBooking','BookingController@selectReportForBooking');

          Route::get('selectApprovedBookingByCustomer','BookingController@selectApprovedBookingByCustomer');

          Route::get('selectRemainingBookingByCustomer','BookingController@selectRemainingBookingByCustomer');

          Route::get('selectStatisticsForRating','BookingController@selectStatisticsForRating');

          Route::get('RBookingCounter','BookingController@RBookingCounter');

          Route::get('NewBookingCounter','BookingController@NewBookingCounter');

          Route::get('BookingCounter','BookingController@BookingCounter');

          Route::get('selectBookingReport','BookingController@selectBookingReport');
//______________
//SystemLogController
          Route::get('SystemLogRegistry','SystemLogController@SystemLogRegistry');

          Route::get('selectSystemLogReport','SystemLogController@selectSystemLogReport');
//______________
//ProductsController
          Route::post('insertProduct','ProductsController@insertProduct');

          Route::get('showProducts','ProductsController@showProducts');

          Route::post('updateProduct','ProductsController@updateProduct');

          Route::get('deleteProduct','ProductsController@deleteProduct');

          Route::get('selectProductForUpdate','ProductsController@selectProductForUpdate');

          Route::get('selectProductReport','ProductsController@selectProductReport');
//______________

//StatisticsController
         Route::get('selectStatisticsForRating','StatisticsController@selectStatisticsForRating');

         Route::get('selectStatisticsNacionalvsInternational','StatisticsController@selectStatisticsNacionalvsInternational');

         Route::get('selectStatisticsMostVisited','StatisticsController@selectStatisticsMostVisited');
//______________
//NotificationsController
         Route::get('selectToursNotifications','NotificationsController@selectToursNotifications');

         Route::get('selectProductNotifications','NotificationsController@selectProductNotifications');

         Route::post('massiveNotificationTour','NotificationsController@massiveNotificationTour');

         Route::post('massiveNotificationProducto','NotificationsController@massiveNotificationProducto');

//______________
//Login and Logout Routes-Start
Route::get('redirectPath','AuthController@redirectPath');
Route::get('logoutS','AuthController@logoutS');
Route::get('passwordChange','AuthController@passwordChange');
//Login and Logout Routes-End

Route::get('login', ['as'=>'login','uses'=>'PagesController@Login']);

Route::group(['middleware' => 'roles'], function () {
    Route::get('admin', ['as'=>'admin','uses'=>'PagesController@Admin']);
});
Route::get('invoice/{invoice}', 'PdfController');
