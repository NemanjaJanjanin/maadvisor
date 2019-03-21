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

Auth::routes();

Route::middleware('guest_user')->group( function () {
	Route::get('/', 'LoginController@index');
	Route::get('/login', 'LoginController@index');
	Route::post('/signin', 'LoginController@signin');
	Route::post('/signup', 'LoginController@signup');
	Route::post('/forgot_password', 'LoginController@forgot_password');
});

Route::get('/email_verification', 'LoginController@email_verification');
Route::get('/email_verification/(:num?)', 'LoginController@email_verification');

Route::middleware('admin')->group( function () {
	// Route::get('/home', 'MusicController@index')->middleware('admin');
	Route::get('/home',                'AdminController@index');
	Route::get('/profile',             'AdminController@profile');
	Route::get('/logout',              'AdminController@logout');
	Route::post('/profile_update',     'AdminController@profile_update');
	Route::post('/profilepic_update',  'AdminController@profilepic_update');
	Route::post('/change_password',    'AdminController@change_password');
	Route::get('/send_mail',           'AdminController@send_mail');

  Route::get('/search_all',           'SearchAllController@index');

  // Route::get('/attorney_profile',     'AttorneyProfileController@showAddForm');
  // Route::get('/attorney_profile/{id}',     'AttorneyProfileController@index');
  // Route::post('/attorney_profile_update',   'AttorneyProfileController@update');
  // Route::post('/attorney_profile_add',   'AttorneyProfileController@store');
  //
  // Route::get('/user_role',                 'UserRoleController@show');
  // Route::get('/user_add_new',                 'UserRoleController@showAddForm');
  // Route::post('/user_role/set_department', 'UserRoleController@setDepartment');
  // Route::post('/user_role/set_user_status', 'UserRoleController@setUserStatus');
  // Route::post('/user_role/set_user_role', 'UserRoleController@setUserRole');
  // Route::post('/user_role/set_app_stages', 'UserRoleController@setAppStage');

  Route::get('/update_sync/cvent',           'UpdateSyncCventController@index');

  Route::get('/update_sync/openwater',                'UpdateSyncOpenWaterController@index');
  Route::post('/update_sync/openwater_sync_csv',      'UpdateSyncOpenWaterController@SyncOpenWaterContactData');

  Route::get('/update_sync/zoho',            'UpdateSyncZohoController@index');
});
