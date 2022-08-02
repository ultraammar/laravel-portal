<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClubController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[LoginController::class, 'showLoginForm'])->name('admin.login');

Route::prefix('admin')->group(function() {
	
	//------------ ADMIN LOGIN SECTION ------------
	// Route::get('/',[LoginController::class, 'showLoginForm'])->name('admin.login');
	Route::post('/login',[LoginController::class, 'login'])->name('admin.login.submit');
	Route::get('/forgot', [LoginController::class, 'showForgotForm'])->name('admin.forgot');
	Route::post('/forgot',[LoginController::class, 'forgot'])->name('admin.forgot.submit');
	Route::get('/logout',[LoginController::class, 'logout'])->name('admin.logout');
	//------------ ADMIN LOGIN SECTION ENDS ------------


	//------------ ADMIN DASHBOARD & PROFILE SECTION ------------
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
	Route::get('/Review', [DashboardController::class, 'review'])->name('admin.review');
	Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
	Route::post('/profile/update', [DashboardController::class, 'profileupdate'])->name('admin.profile.update');
	Route::get('/password', [DashboardController::class, 'passwordreset'])->name('admin.password');
	Route::post('/password/update', [DashboardController::class, 'changepass'])->name('admin.password.update');
	//------------ ADMIN DASHBOARD & PROFILE SECTION ENDS ------------


	//------------ ADMIN USER SECTION ------------
	Route::get('/user/users', [UserController::class, 'index'])->name('admin.user.users');
	Route::get('/user/add', [UserController::class, 'create'])->name('admin.user.create');
	Route::get('/user/Edit', [UserController::class, 'show'])->name('admin.user.show');
	Route::get('/user/Edit/details', [UserController::class, 'showAdmin'])->name('admin.user.showAdmin');
	Route::get('/user/newUsers', [UserController::class, 'newUser'])->name('admin.user.newUser');
	Route::post('/user/add', [UserController::class, 'store'])->name('admin.user.store');
	//------------ ADMIN USER SECTION ENDS------------


	//------------ ADMIN STUDENT SECTION ------------
	Route::get('/student/All', [StudentController::class, 'index'])->name('admin.student.index');
	Route::get('/student/add', [StudentController::class, 'create'])->name('admin.student.create');
	Route::post('/student/add', [StudentController::class, 'store'])->name('admin.student.store');
	//------------ ADMIN STUDENT SECTION ENDS------------


	
	//------------ ADMIN CLUB SECTION ------------
	Route::get('/club/All', [ClubController::class, 'index'])->name('admin.club.index');
	Route::get('/club/students', [ClubController::class, 'students'])->name('admin.club.student');
	// Route::get('/club/add', [ClubController::class, 'create'])->name('admin.club.create');
	// Route::post('/club/add', [ClubController::class, 'store'])->name('admin.club.store');
	//------------ ADMIN CLUB SECTION ENDS------------



	//------------ ADMIN CLUB SECTION ------------
	// Route::get('/club/All', [ClubController::class, 'index'])->name('admin.club.index');
	// Route::get('/club/students', [ClubController::class, 'students'])->name('admin.club.student');
	// Route::get('/club/add', [ClubController::class, 'create'])->name('admin.club.create');
	// Route::post('/club/add', [ClubController::class, 'store'])->name('admin.club.store');
	//------------ ADMIN CLUB SECTION ENDS------------




});
