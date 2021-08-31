<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebookController; 
use App\Http\Controllers\TwitterAuthController; 
use App\Http\Controllers\GoogleAuthController; 
use App\Http\Controllers\ReleasesController;
Use App\Http\Controllers\AdminController; 
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\DashboardController;
Use App\Http\Controllers\AccountVerificationController; 
Use App\Http\Controllers\AnalyticsController; 
Use App\Http\Controllers\ProfileController;


Use App\Http\Middleware\CheckRole; 



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

Route::view('/', 'auth.login');
Route::view('/privacy', 'privacy');
Route::view('/legal', 'legal');


Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']); 
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']); 
Route::get('auth/google/callback', [GoogleAuthController::class, 'hanldeGoogleCallback']); 
Route::get('auth/twitter/callback', [TwitterAuthController::class, 'handleTwitterCallback']); 


Route::get('/dashboard', DashboardController::class)->middleware(['auth:sanctum', 'verified', 'CheckRole'])->name('dashboard');
Route::get('/admin', AdminController::class)->middleware(['auth:sanctum', 'verified'])->name('admin'); 
Route::get('/user', UserController::class)->middleware(['auth:sanctum', 'verified'])->name('user');
Route::get('/account-verification', AccountVerificationController::class)->middleware(['auth:santum', 'verified'])->name('account-verification');
Route::get('/analyitcs', AnalyticsController::class)->middleware(['auth:sanctum', 'verified'])->name('analytics');


Route::resource('profile', ProfileController::class)->middleware(['auth:sanctum', 'verified']);

Route::middleware(['auth:sanctum', 'verified'])->get('/royalties', function () {
    return view('royalties');
})->name('royalties');

Route::middleware(['auth:sanctum', 'verified'])->get('/manage', function () {
    return view('manage');
})->name('manage');

Route::middleware(['auth:sanctum', 'verified'])->get('/new-release', function () {
    return view('new-release');
})->name('new-release');


