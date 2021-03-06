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

Route::get('/', 'IndexController@index' );
Route::get('/aboutus', function () {   return view('aboutus');   });
Route::get('/fees', function () {   return view('fees');   });
Route::get('/residential', function () {   return view('residential');   });
Route::get('/commercial', function () {   return view('commercial');   });
Route::get('/contactus', function () {   return view('contactus');   });

Route::post('/contactus', 'MailsController@contactus');
Route::post('/requestquote', 'MailsController@requestquote');
Route::post('/businessrate', 'MailsController@businessrate');

Route::get('/businessrate', function () {   return view('businessrate');   });

Route::get('/commercial-properties', 'PropertiesController@showCommercial');
Route::get('/residential-properties', 'PropertiesController@showResidential');
Route::post('/commercial-properties', 'PropertiesController@showCommercial');
Route::post('/residential-properties', 'PropertiesController@showResidential');
Route::get('/commercial-properties/{property}', 'PropertiesController@show');
Route::get('/residential-properties/{property}', 'PropertiesController@show');

Route::get('/testimonials', 'TestimonialsController@index');
Route::get('/test', function () {   return view('test');   }); /*test*/

Route::get('/createproperty', 'PropertiesController@create')->name('createproperty');
Route::post('/createproperty', 'PropertiesController@store')->name('createproperty');
Route::get('/allproperties/{property}/edit', 'PropertiesController@edit')->name('editproperty');
Route::patch('allproperties/{property}/update', 'PropertiesController@update')->name('updateproperty');
Route::get('/allproperties', 'PropertiesController@all')->name('allproperties');
Route::delete('/allproperties/{property}', 'PropertiesController@destroy');

Route::get('/createtestimonial', 'TestimonialsController@create')->name('createtestimonial');
Route::post('/createtestimonial', 'TestimonialsController@store')->name('createtestimonial');
Route::get('/alltestimonials', 'TestimonialsController@all')->name('alltestimonials');
Route::delete('/alltestimonials/{testimonial}', 'TestimonialsController@destroy');
Route::get('/alltestimonials/{testimonial}/edit', 'TestimonialsController@edit')->name('edittestimonial');
Route::patch('alltestimonials/{testimonial}/update', 'TestimonialsController@update')->name('updatetestimonial');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/register', 'AdminController@index')->name('admin');