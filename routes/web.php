<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacebookController; 
use App\Http\Controllers\TwitterAuthController; 
use App\Http\Controllers\GoogleAuthController; 
use App\Http\Controllers\ReleasesController; 
use App\Http\Middleware\CheckRole; 
use App\User;

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

Route::middleware(['auth:sanctum', 'verified', 'CheckRole'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    
    return view('dashboard');

})->name('admin');

Route::middleware(['auth:sanctum', 'verified'])->get('/user', function () {
   
    return view('dashboard');

})->name('user');

Route::middleware(['auth:sanctum', 'verified'])->get('/account-verification', function () {
   
    return view('account-verification');

})->name('account-verification');

Route::middleware(['auth:sanctum', 'verified'])->get('/analytics', function () {
    return view('analytics');
})->name('analytics');

Route::middleware(['auth:sanctum', 'verified'])->get('/royalties', function () {
    return view('royalties');
})->name('royalties');

Route::middleware(['auth:sanctum', 'verified'])->get('/manager', function () {
    // $users=DB::table('users')
    // ->where('user_role', 'user')
    // ->get(); 

    return view('manager');
})->name('manager');

Route::middleware(['auth:sanctum', 'verified'])->get('/new-release', function () {
    return view('new-release');
})->name('new-release');

Route::resource('/release', ReleasesController::class)->middleware(['auth:sanctum', 'verified']); 

Route::middleware(['auth:sanctum', 'verified'])->get('/profile', function () {
    $user=Auth::user();
    return view('profile', compact('user'));
})->name('profile');