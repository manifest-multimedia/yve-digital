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
Use App\Http\Controllers\UploadSongsController; 
Use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserManagementController; 

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

Route::get('/', function(){ return view('auth.login');} );
Route::view('/privacy', 'privacy');
Route::view('/legal', 'legal');

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']); 
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']); 
Route::get('auth/google/callback', [GoogleAuthController::class, 'hanldeGoogleCallback']); 
Route::get('auth/twitter/callback', [TwitterAuthController::class, 'handleTwitterCallback']); 

Route::middleware(['auth:sanctum', 'verified'])->group(
    function(){

        Route::get('/dashboard', DashboardController::class)->middleware(['CheckRole'])->name('dashboard');
        Route::get('/admin', AdminController::class)->name('admin'); 
        Route::get('/user', UserController::class)->name('user');
        Route::get('/account-verification', AccountVerificationController::class)->name('account-verification');
        Route::get('/upload-songs', UploadSongsController::class)->name('upload-songs');
        Route::get('profile', ProfileController::class)->name('profile');
        Route::get('/royalties', [DashboardController::class, 'Royalties'])->name('royalties');
        Route::get('/manage', function () { return view('manage'); })->name('manage');
        Route::resource('users', UserManagementController::class); 
        Route::get('/new-release', function () { return view('new-release');})->name('new-release');
        Route::get('/account-setup', [AccountVerificationController::class, 'CompleteSetup'])->name('account-setup');
        Route::get('/account-update', [AccountVerificationController::class, 'UpdateAccount'])->name('account-update');
    });