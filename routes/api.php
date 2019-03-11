<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-LBM');

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
//
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('checkHeader')->group( function () {
    Route::post('get_contact_data',    'api\DataController@getContactDataSet');
});

Route::middleware('auth:api')->group( function () {
	//Route::resource('musicians', 'API\MusicController@index');
});
