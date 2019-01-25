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
    return view('frontend/index');
});

Auth::routes();


Route::get('/profile/setting', 'userinfoController@profile_setting');
Route::post('/checkemail', 'userinfoController@check_email');
Route::post('/profile/update', 'userinfoController@update');
Route::post('/location/update', 'userinfoController@location_update');
Route::post('/experience/update', 'userinfoController@experience_update');
Route::post('/skillTags/update', 'userinfoController@skillTags_update');

//frontend

Route::get('/{id}', 'profileController@profile_view');

