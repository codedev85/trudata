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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomePage@getHomePage');

Route::get('/about-us/','AboutController@getAboutUsPage');

Route::get('/why-tru-data/','TruDataController@getTruDataPage');

Route::get('/contact-us/','ContactController@getContactPage');
 
Route::get('/pages/', 'PageController@allPages');

Route::get('/admin-why-us-page/{id}','TruDataController@updateWhyUsPage');

Route::post('/admin-why-us-page-edit/{id}','TruDataController@EditWhyUsPage');

//contact us page
Route::get('contact-us-create','ContactController@showContactUsPage');

Route::post('/contact-us-post/','ContactController@createContactUsPage');

Route::get('/contact-us-update/{id}','ContactController@updateContactUsPage');

Route::post('/contact-us-update-post/{id}','ContactController@updateContactUsPagePost');



//admin aboust us page 

Route::get('/create-about-us/','AboutController@getAdminAboutUsPage');

Route::post('/post-about-us/','AboutController@AdminCreateAboutUsPage');

Route::get('/edit-about-us/{id}','AboutController@getAdminAboutUsPage');

Route::post('/update-about-us/{id}','AboutController@AdminUpdateAboutUsPage');

//leadership
Route::get('/leadership/','AboutController@leadershipIndex');

Route::get('/leadership-create/','AboutController@createLeaderShip');

Route::post('/post-leadership/','AboutController@postLeadership');












