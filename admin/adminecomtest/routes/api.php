<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SitefooterController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductlistController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductDetailsController;
use App\Http\Controllers\Admin\NotificationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/visitor',[VisitController:: class, 'GetvisitorDetails']);

//contact_us
Route::post('/contact-us', [ContactController::class, 'contact_us']);

//sitefooter

Route::get('/siteinfo', [SitefooterController::class, 'sitefooter']);

//category
Route::get('/allcategory', [CategoryController::class, 'allcategory']);
//product_List
Route::get('/productlistbyremark/{remark}', [ProductlistController::class, 'productlist']);

Route::get('/productlistbycategory/{category}', [ProductlistController::class, 'productlistbycategory']);
Route::get('/productlistbysubcategory/{category}/{subcategory}', [ProductlistController::class, 'productlistbysubcategory']);

//Slider
Route::get('/allslider', [SliderController::class, 'allslider']);
//ProductDetails
Route::get('/product/details/{id}', [ProductDetailsController::class, 'productdetails']);
//notification
Route::get('/notification', [NotificationController::class, 'notification']);
//search
Route::get('/search/{key}', [ProductlistController::class, 'productbysearch']);



