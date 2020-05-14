<?php

Route::pattern('chapter', '[1-9]+(\.[1-9]+)?');
Route::pattern('activity', '[1-9][0-9]*');
Route::pattern('activity_id', '[0-9]+');

// Authentication Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('signup', 'Auth\RegisterController@showUserRegisterForm');
Route::post('register', 'Auth\RegisterController@create');
Route::get('verifyEmail/{token}', 'Auth\RegisterController@verifyUser');

// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Site Routes
Route::get('/', 'AppController@index')->name('home');
Route::get('chapter/{chapter}/{activity?}', 'AppController@chapter')->name('chapter');
Route::get('material/{chapter}/{activity_id?}', 'AppController@getMaterial')->name('material');
Route::get('pdfviewer/{chapter}/{activity_id?}', 'AppController@pdfviewer')->name('pdfviewer');
Route::get('/account/basic','AccountController@index');
Route::get('/account/profile','AccountController@show_profile');
Route::get('/account/email-notification','AccountController@show_email_notif');
Route::get('/account/verifyEmail/{token}', 'AccountController@verifyEmail');
Route::get('/account/password','AccountController@show_password');

Route::post('/account/changeAvatar', 'AccountController@changeAvatar');
Route::post('/account/updateProfile','AccountController@updateProfile');
Route::post('/account/changePassword','AccountController@changePassword');
Route::post('/account/changeEmail','AccountController@changeEmail');
Route::post('/account/appToWhatsapp', 'AccountController@appToWhatsapp');
Route::post('/account/appToWechat', 'AccountController@appToWechat');

Route::get('/showVerifyEmail/{id}/{password}', 'ShowMailController@showVerifyEmail');

// Ajax Routes
Route::middleware('ajax')->group(function () {
	Route::post('/chapter/activity/register', 'AppController@register')->name('chapter.register');
	Route::post('/chapter/activity/reset', 'AppController@reset')->name('chapter.reset');
	Route::post('/chapter/activity/reset/all', 'AppController@resetAll')->name('chapter.reset.all');
	Route::post('/feedback', 'AppController@feedback');
});

// Admin Panel Routes
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
	Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
	Route::get('/register', 'Auth\RegisterController@showAdminRegisterForm');

	Route::post('/login', 'Admin\Auth\LoginController@login');
	Route::post('/register', 'Auth\RegisterController@createAdmin');
	Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

	Route::resource('/users', 'Admin\UsersController');
	Route::get('/users/mailForm/{id}', 'Admin\UsersController@mailform')->name('users.mailform');
	Route::post('/users/mailTo', 'Admin\UsersController@mailto')->name('users.mailto');
	Route::delete('/delete-multiple-users', 'Admin\UsersController@deleteMultiple')->name('users.multiple-delete');

	Route::resource('/activities', 'Admin\ActivitiesController');
	Route::resource('/admins', 'Admin\AdminsController');
	Route::resource('/products', 'Admin\ProductsController');
	Route::resource('/chapters', 'Admin\ChaptersController');
	Route::resource('/feedbacks', 'Admin\FeedbacksController');
	Route::resource('/scores', 'Admin\ScoresController');
	Route::resource('/tracking', 'Admin\TrackingController');
	Route::resource('/faqs', 'Admin\FaqsController');

	Route::resource('/reports', 'Admin\ReportsController');
	Route::get('/notifications/sortby/{field_name}/{direction}', 'Admin\NotificationsController@index')->name('notifications.index');
	Route::get('/notifications/readall', 'Admin\NotificationsController@readAll');
	Route::get('/notifications/newNotification', 'Admin\NotificationsController@newNotification');
	Route::delete('/notifications/clearItemHistory/{id}', 'Admin\NotificationsController@clearItemHistory');
	Route::delete('/notifications/clearAllItemsHistory', 'Admin\NotificationsController@clearAllItemsHistory');

	Route::get('/replyReport/{user_id}', 'Admin\ReportsController@showReplyForm');

	Route::get('/statistics', 'Admin\Statistics@index')->name('statistics.index');
	Route::view('/blog', 'admin.blog.index', ['title'=>'BLOG'])->name('blog.index');

	Route::resource('/newsletters', 'Admin\NewslettersController');
	Route::delete('/delete-multiple-newsletters', 'Admin\NewslettersController@deleteMultiple')->name('newsletters.multiple-delete');

	Route::resource('/messages', 'Admin\MessagesController');
	Route::delete('/delete-multiple-messages', 'Admin\MessagesController@deleteMultiple')->name('messages.multiple-delete');
	
	Route::get('redirectImageGallery', 'Admin\ImageGalleryController@index');

	Route::get('validationMails', 'Admin\ValidationMailsController@index')->name('validationMails.index');
	Route::post('validationMails/send/{id}', 'Admin\ValidationMailsController@send');
});


Route::get('chapter/5.1/storyline/html5/data/js/{file}', function($file_name){
	return redirect('storyline/html5/data/js/'.$file_name);
});