<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-MAA');

use Illuminate\Http\Request;

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

Route::middleware('checkHeader')->group( function () {
    Route::post('get_contact_data',                'api\DataController@getContactDataSet');
    Route::post('get_openwater_contact_data',      'api\DataController@getOpenWaterContactData');
});

Route::middleware('auth:api')->group( function () {
	//Route::resource('musicians', 'API\MusicController@index');
});
