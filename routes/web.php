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


Route::get('/', 'HomePageController@getHomePage');
Route::get('/faq/','FaqController@getFaqPage');

Route::get('/blog','BlogController@getBlog');

Route::get('/blog-post/{id}','BlogController@blogPost');

Route::get('/about-us/','AboutController@getAboutUsPage');

Route::get('/why-tru-data/','TruDataController@getTruDataPage');

Route::get('/contact-us/','ContactController@getContactPage');
Route::get('/terms','TermController@getTerms');
//show blog
Route::get('/blog/{id}','BlogController@showBlog');
Route::any('/search','FaqController@search');

// Route::get('/twitter', function()
// {
// 	return Share::load('http://www.twitter.com', 'twitter')->twitter();
// });




Route::middleware(['auth','admin'])->group(function () {

//admin
Route::get('/admin', 'HomeController@index')->name('home');
 

//allow accesss to admins
Route::get('/pages/', 'PageController@allPages');

Route::get('/admin-why-us-page/{id}','TruDataController@updateWhyUsPage');

Route::post('/admin-why-us-page-edit/{id}','TruDataController@EditWhyUsPage');

//contact us page
Route::get('contact-us-create','ContactController@showContactUsPage');

Route::post('/contact-us-post/','ContactController@createContactUsPage');

Route::get('/contact-us-update/{id}','ContactController@updateContactUsPage');

Route::post('/contact-us-update-post/{id}','ContactController@updateContactUsPagePost');

//contact kjk

Route::get('/contact-developer/','ContactController@contactKJK');
Route::post('/sendmail-to-kjk/', 'ContactController@sendMailToKJK');



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
Route::get('/approve/leadership/{id}' , 'AboutController@approveLeadership');
Route::get('/suspend/leadership/{id}' , 'AboutController@suspendLeadership');

//teams

Route::get('/teams/','AboutController@teamIndex');

Route::get('/teams-create/','AboutController@createTeam');

Route::post('/post-team/','AboutController@postTeam');

Route::get('/remove/team/{id}','AboutController@removeTeam');
Route::get('/approve/team/{id}','AboutController@approveTeam');

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

Route::get('/approve/{id}','HomePageController@approvePartner');
Route::get('/suspend/{id}','HomePageController@suspendPartner');


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

///add blog nbanner 
Route::get('/add-bolg-banner/','BlogController@AddBlogBanner');
Route::post('/post-blog-banner/','BlogController@PostBlogBanner');
//update blog banner 
Route::get('/edit-blog-banner/{id}','BlogController@EditBlogBanner');
Route::post('/update-blog-banner/{id}','BlogController@UpdateBlogBanner');





//roles
Route::get('/roles/','RoleController@allRoles' );

Route::get('/add-new-role/','RoleController@addNewRole');

Route::post('/post-role/','RoleController@postRole');

Route::get('/edit-role/{id}','RoleController@editRole');

Route::post('/update-role/{id}','RoleController@updateRole');


//fooooter

Route::get('/footer/{id}','FooterController@footerPage');
Route::post('/create-footer/', 'FooterController@createFooter');
Route::post('/update-footer/{id}', 'FooterController@updateFooter');


//faqs 
Route::get('/all-faqs/','FaqController@allFaqs');
Route::get('/add-new-faq/','FaqController@createFaqs');
Route::post('/post-faq/','FaqController@postFaq');
Route::get('/edit-faq/{id}','FaqController@editFaq');
Route::post('/update-faq/{id}','FaqController@updateFaq');
Route::get('/publish/{id}','FaqController@publishFaq');
Route::get('/unpublish/{id}','FaqController@unpublishFaq');
Route::get('/add-faq-banner/',"FaqController@addFaqBanner");
Route::post('/post-faq-banner/','FaqController@postFaqBanner');
Route::post('/update-faq-banner/{id}','FaqController@updateBanner');


//terms
Route::get('/edit-terms/','TermController@editTerm');
Route::post('/post-terms/','TermController@postTerm');
Route::get('/update-term/{id}','TermController@updateTerm');
Route::post('/post-update-term/{id}','TermController@postUpdateTerm');
Route::get('/add-terms-banner/','TermController@createTermBanner');
Route::post('/post-term-banner/','TermController@postTermBanner');
Route::post('/update-term-banner/{id}','TermController@updateTermBanner');

//find user or admin

Route::get('/update-user/{id}','RoleController@findUser');
Route::post('/post-updated-user/{id}','RoleController@postUpdateUser');

///retrieve all admin
Route::get('/all-admin/','RoleController@allAdmin');
Route::get('/edit-admin/{id}', 'RoleController@editAdmin');
Route::get('/add-admin/','RoleController@addNewAdmin');
Route::post('/post-admin-user/','RoleController@postAdmin');
//suspend admin
Route::get('/suspend/admin/{id}','RoleController@suspendAdmin');
Route::get('/approve/admin/{id}','RoleController@approveAdmin');
//send mails to admin
Route::get('/send-mail-to-admin/{id}', 'RoleController@sendMailToEachAdmin');
Route::post('/post-mail-to-admin/','RoleController@postMailToEachAdmin');
//send mails to all admin
Route::get('/send-mail-to-all-admin/','RoleController@sendMailToAllAdmin');
Route::post('/post-mail-to-all-admin/','RoleController@postMailToAllAdmin');





//socials 
Route::get('/socials/','SocialController@weAreSocial');
Route::post('/post-social/','SocialController@postSocial');
Route::post('/update-social/{id}', 'SocialController@updateSocial');

//menu
Route::get('/menu-page/', 'MenuController@menuPage');
Route::post('/menu-post/','MenuController@postMenu');
Route::post('/menu-update/{id}','MenuController@updateMenu');


//contact us 
Route::post('/send','NewMailController@send');

});










