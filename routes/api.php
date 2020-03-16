<?php

use Illuminate\Http\Request;

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index', 'API\PagesController@home')->name('home');
Route::get('/about', 'API\PagesController@about')->name('about');
Route::get('/portfolio', 'API\PagesController@portfolio')->name('portfolio');
Route::get('/services', 'API\PagesController@services')->name('services');
Route::get('/wordpress', 'API\PagesController@wordpress')->name('wordpress');
Route::get('/hubspot', 'API\PagesController@hubspot')->name('hubspot');
Route::get('/customDevelopment', 'API\PagesController@customDevelopment')->name('customDevelopment');
Route::get('/digitalMarketing', 'API\PagesController@digitalMarketing')->name('digitalMarketing');
Route::get('/webRebrand', 'API\PagesController@webRebrand')->name('webRebrand');
Route::get('/career', 'API\PagesController@career')->name('career');
