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
//allow acees to all users
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomePageController@getHomePage');






Route::get('/blog','BlogController@getBlog');

Route::get('/blog-post/{id}','BlogController@blogPost');

Route::get('/about-us/','AboutController@getAboutUsPage');

Route::get('/why-tru-data/','TruDataController@getTruDataPage');

Route::get('/contact-us/','ContactController@getContactPage');




 //allow accesss to admins
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

Route::get('/leadership-edit/{id}','AboutController@editLeadership');

Route::post('/update-leadership/{id}','AboutController@updateLeadership');

Route::get('/teams/','AboutController@teamIndex');

Route::get('/teams-create/','AboutController@createTeam');

Route::post('/post-team/','AboutController@postTeam');

//homepage index 
Route::get('admin-homepage-edit','HomePageController@adminIndexPageEdit');

Route::post('admin-homepage-post','HomePageController@adminPostHomepageData');
Route::post('admin-homepage-update/{id}','HomePageController@adminUpdateHomepageData');


// Route::post('admin-homepage-post','Homepage@adminPostHomepageData');
//partners
Route::get('/all-partners/', 'HomePageController@allpartners');
Route::get('/creata-partners/','HomePageController@createPartners');

Route::post('/post-partner/','HomePageController@postPartner');

Route::get('/edit-partner/{id}','HomePageController@editPartners');


Route::post('/partner-update/{id}','HomePageController@updatePartner');


//Blog
Route::get('/create-blog/','BlogController@createBlog');

Route::get('/all-blogs/','BlogController@allBlog');

Route::post('/post-blog/','BlogController@postBlog');

Route::get('/blog-category/','BlogController@blogCategory');

Route::post('/post-blog-category/','BlogController@postBlogCategory');

Route::get('/blog-edit/{id}', 'BlogController@editBlog');

Route::post('/update-blog-post/{id}','BlogController@updateBlog');

//to publish the blog and unpublish
Route::get('/publish/{id}','BlogController@publish');

Route::get('/unpublish-article/{id}','BlogController@unpublish');

//to feature an article
Route::get('/feature/{id}','BlogController@feature');

Route::get('/unfeature-article/{id}','BlogController@unfeature');

//show blog
Route::get('/blog/{id}','BlogController@showBlog');
















