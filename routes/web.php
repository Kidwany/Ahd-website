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
    return view('welcome');
});



/*==============================================   Dashboard Routes    ====================================================*/

Route::group(['middleware' => 'auth' ,'namespace' => 'Dashboard'], function () {


    /* -- Return Home Page -- */
    Route::get('/ahdAdmin', 'DashboardController@index');

    /* -- Return Slider Page -- */
    Route::resource('/ahdAdmin/slider', 'SliderController');

    /* -- Return Service Page -- */
    Route::resource('/ahdAdmin/service', 'ServiceController');

    /* -- Return Service Page -- */
    Route::resource('/ahdAdmin/video', 'VideoController');

    /* -- Return Client Page -- */
    Route::resource('/ahdAdmin/client', 'ClientController');

    /* -- Return Testimonial Page -- */
    Route::resource('/ahdAdmin/testimonial', 'TestimonialController');

    /* -- Return Gallery Page -- */
    Route::resource('/ahdAdmin/gallery', 'GalleryController');
    Route::post('/ahdAdmin/upload-to-gallery', 'GalleryController@uploadImagesToGallery');

    /* -- Return Message Page -- */
    Route::resource('/ahdAdmin/message', 'MessageController');

    /*--------  About   --------*/
    Route::get('/ahdAdmin/about/edit', 'AboutController@edit');
    Route::patch('/ahdAdmin/about/update', 'AboutController@update');

    /*--------  Contact   --------*/
    Route::get('/ahdAdmin/contact/edit', 'ContactController@edit');
    Route::patch('/ahdAdmin/contact/update', 'ContactController@update');


    /*--------  Setting   --------*/
    Route::get('/ahdAdmin/setting/edit', 'SettingController@edit');
    Route::patch('/ahdAdmin/setting/update', 'SettingController@update');



});



Route::group(['middleware' => ['Maintenance', 'Lang']], function () {

    Route::get('lang/{lang}', 'LanguageController@changeLanguage');

    /*=======   Return Home     ========*/
    Route::get('/', 'WebsitePagesController@index');

    /*=======   Return about    ========*/
    Route::get('/about', 'WebsitePagesController@about');

    /*=======   Return gallery  ========*/
    Route::get('/gallery', 'WebsitePagesController@gallery');

    /*=======   Return Service    ========*/
    Route::get('/service', 'WebsitePagesController@service');

    /*=======   Return Video    ========*/
    Route::get('/video', 'WebsitePagesController@video');

    /*=======   Return Service Details     ========*/
    Route::get('/service-details/{id}', 'WebsitePagesController@serviceDetails');

    /*=======   Return Contact     ========*/
    Route::get('/contact', 'WebsitePagesController@contact');
    Route::post('message', 'WebsitePagesController@message');

});


Route::get('maintenance', function () {
    return 'maintenance';
});


Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
