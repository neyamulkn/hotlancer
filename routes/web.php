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


Route::get('dashbord/profile/setting', 'userinfoController@profile_setting');
Route::post('/checkemail', 'userinfoController@check_email');
Route::post('/profile/update', 'userinfoController@update');
Route::post('/location/update', 'userinfoController@location_update');
Route::post('/experience/update', 'userinfoController@experience_update');
Route::post('/skillTags/update', 'userinfoController@skillTags_update');
Route::post('/user/image/upload', 'userinfoController@user_image');


// insert main category
Route::get('dashbord/gig-category', 'superAdminController@gig_category');
Route::post('dashbord/create-gig-category', 'superAdminController@create_gig_category');
// insert sub category
Route::get('dashbord/gig-subcategory', 'superAdminController@gig_subcategory');
Route::post('dashbord/create-gig-subcategory', 'superAdminController@create_gig_subcategory');
// insert gig meta data
Route::get('dashbord/gig-metadata', 'superAdminController@gig_metadata');
Route::post('dashbord/gig-metadata', 'superAdminController@insert_metadata');

/// filter route
Route::get('/dashbord/filter/', 'filterController@show_filer_page'); // filter
Route::post('/dashbord/filter/', 'filterController@insert_filter'); // filter

//message inbox
Route::get('/dashbord/inbox/{username?}', 'messageController@inbox');
Route::get('/dashbord/getmessages/{id}', 'messageController@getmessages');

Route::get('dashbord/gig-pricescope', 'superAdminController@gig_pricescope');
Route::post('dashbord/gig-pricescope', 'superAdminController@insert_pricescope');

Route::post('/get_subcategory', 'gigController@get_subcategory'); //get sub category for gig
Route::post('/get_medata', 'gigController@get_medata'); //get sub category for gig

Route::get('/dashbord/create-gig', 'gigController@create_gig'); // view gig page
Route::post('/dashbord/create-gig', 'gigController@insert_gig'); // insert gig 1st step
Route::get('/dashbord/create-gig/{step}/{title?}', 'gigController@gig_step'); // update gig

Route::post('/dashbord/create-gig/second', 'gigController@insert_gig_step_second'); // insert gig step 2nd
Route::post('/dashbord/create-gig/third', 'gigController@insert_gig_step_third'); // insert gig step 3rd
Route::post('/dashbord/create-gig/fourth', 'gigController@insert_gig_step_fourth'); // insert gig step 4th
Route::post('/dashbord/create-gig/five', 'gigController@insert_gig_step_five'); // insert gig step 5th
Route::post('/dashbord/create-gig/finish', 'gigController@insert_gig_step_finish'); // insert gig step finish
Route::post('/dashbord/create/price', 'gigController@insert_price'); // update gig

Route::get('/image-upload/{id}', 'gigController@image_upload'); // update gig

//question_answer delete
Route::post('/question_answer/delete', 'gigController@question_answer_delete'); // question_answer_delete gig

//error page
Route::get('/hotlancer/error', function(){
	// $user = Auth::user();
 //        $userinfo = Auth::user()->userinfo;
	return view('backend.error');
});

//frontend

Route::get('/{id}', 'profileController@profile_view');
Route::any('/categories/{category}/{subcategory}', 'gighomeController@gig_view');
Route::get('/{user_name}/{gig_url}', 'gighomeController@gig_details');

Route::post('/categories/{category}/{subcategory}', 'gighomeController@gig_filter');


Route::get('order/{user}/{gig_url}/{package}', 'gigOrderController@order_details');
Route::post('/order/checkout/{gig_url}', 'gigOrderController@order_details');
