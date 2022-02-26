<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
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
Route::get('/', [PageController::class,'index'])->name('home');

//user
Route::get('/user/create_post', [PageController::class,'createPost'])->name('createPost');

//user create post
Route::post("/user/create_add_post", function () {
    return "HI";
})->name('addPost');

//userprofile
Route::get('/user/user_profile', [PageController::class,'userProfile'])->name('userProfile');

//contactus
Route::get('/user/contact_us', [PageController::class,'contactUs'])->name('contactUs');





//login form
Route::get('/login', [AuthController::class,'login'])->name('login');

//register form
Route::get('/register', [AuthController::class,'register'])->name('register');
