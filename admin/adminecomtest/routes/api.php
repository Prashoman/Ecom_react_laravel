<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SitefooterController;

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
