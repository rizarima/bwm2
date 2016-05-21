<?php


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

// Login Routes
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::post('login','Auth\AuthController@postLogin');
Route::post('register', 'Auth\AuthController@register');

//User Routes
Route::get('faq', 'FAQController@index');
Route::post('faq/save', 'FAQController@Addpost');
Route::post('home/save', 'HomeController@storeSave');
Route::get('store', 'HomeController@store');
Route::get('NotFound', 'HomeController@NotFound');

// Admin Routes
Route::get('admin/accept/{id}', 'HomeController@acceptOrder');
Route::get('admin/decline/{id}', 'HomeController@declineOrder');
Route::get('dashboard', 'AdminController@index');
Route::get('client', 'AdminController@client');
Route::get('faq_admin', 'AdminController@FAQ');
Route::get('order', 'AdminController@order');

Route::get('profile/{id}', 'AdminController@profile');
Route::post('profile/update', 'AdminController@profileUpdate');
Route::get('profile/p_profil', 'AdminController@p_profile');
Route::get('profile/p_background', 'AdminController@p_background');

Route::get('member', 'AdminController@member');
Route::get('posting', 'AdminController@posting');

//Posting Route
Route::get('posting/add', 'AdminController@createPost');
Route::post('posting/save', 'AdminController@PostingSave');
Route::get('posting/edit/{id}', 'AdminController@editPost');
Route::post('posting/update', 'AdminController@updatePost');
Route::get('posting/delete/{id}', 'AdminController@destroyPost');
Route::get('pdf', function() {
$pdf = PDF::loadView('report');
return $pdf->download('report.pdf');
});
Route::get('pdfadmin', function() {
$pdf = PDF::loadView('report');
return $pdf->download('report.pdf');
});
Route::get('pdfuser', function() {
$pdf = PDF::loadView('report');
return $pdf->download('report.pdf');
});