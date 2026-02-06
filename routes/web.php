<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\TopperController;
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

Route::get('/', [IndexController::class, 'fetchIndex']);

Route::view("/login", 'admin.login')->name('login');;
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/academics', 'academics');
Route::view('/pricing', 'pricing');
Route::view('/certificate', 'certificate');
Route::view('/cbse', 'cbse');

Route::get('/blog', [MediaController::class, 'fetchMedias']);
Route::get('/gallery', [GalleryController::class, 'fetchGallery']);
Route::get('/toppers', [TopperController::class, 'fetchToppers']);

Route::post("/transfer_certificate", [CertificateController::class, 'downloadCertifcate']);
Route::post("/login_post", [AuthController::class, 'login']);
// Route::get('/register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth:web']], function(){ 
    Route::view('/admin/media-upload', 'admin.media-upload');
    Route::view('/admin/toppers-form', 'admin.toppers-form');
    Route::view('/admin/certificate', 'admin.certificate');
    Route::view('/admin/gallery-upload', 'admin.gallery-upload');

    Route::post('/admin/media_create', [MediaController::class, 'upload_media']);
    Route::post("/admin/gallery_create", [GalleryController::class, 'create_gallery']);
    Route::post("/admin/topper_create", [TopperController::class, 'update_topper']);
    Route::post("/admin/upload_certificate", [CertificateController::class, 'upload_certificate']);
    Route::get('/admin/toppers', [TopperController::class, 'fetchAdminToppers']);
    Route::get('/admin/medias', [MediaController::class, 'fetchAdminMedias']);
    Route::get('/admin/images', [GalleryController::class, 'fetchAdminImages']);
    Route::get('/toppers/delete/{id}', [TopperController::class, 'deleteToppers']);
    Route::get('/medias/delete/{id}', [MediaController::class, 'deleteMedia']);
    Route::get('/images/delete/{id}', [GalleryController::class, 'deleteImage']);
});
