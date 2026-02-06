<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@fetchIndex');

Route::view("/login", 'admin.login')->name('login');;
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/academics', 'academics');
Route::view('/pricing', 'pricing');
Route::view('/certificate', 'certificate');
Route::view('/cbse', 'cbse');

Route::get('/blog', 'MediaController@fetchMedias');
Route::get('/gallery', 'GalleryController@fetchGallery');
Route::get('/toppers', 'TopperController@fetchToppers');

Route::post("/transfer_certificate", 'CertificateController@downloadCertifcate');
Route::post("/login_post", "AuthController@login");
// Route::get('/register', "AuthController@register");

Route::group(['middleware' => ['auth:web']], function(){ 
    Route::view('/admin/media-upload', 'admin.media-upload');
    Route::view('/admin/toppers-form', 'admin.toppers-form');
    Route::view('/admin/certificate', 'admin.certificate');
    Route::view('/admin/gallery-upload', 'admin.gallery-upload');

    Route::post('/admin/media_create', 'MediaController@upload_media');
    Route::post("/admin/gallery_create", 'GalleryController@create_gallery');
    Route::post("/admin/topper_create", 'TopperController@update_topper');
    Route::post("/admin/upload_certificate", 'CertificateController@upload_certificate');
    Route::get('/admin/toppers', 'TopperController@fetchAdminToppers');
    Route::get('/admin/medias', 'MediaController@fetchAdminMedias');
    Route::get('/admin/images', 'GalleryController@fetchAdminImages');
    Route::get('/toppers/delete/{id}', 'TopperController@deleteToppers');
    Route::get('/medias/delete/{id}', 'MediaController@deleteMedia');
    Route::get('/images/delete/{id}', 'GalleryController@deleteImage');
});
