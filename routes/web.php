<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\contactusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::middleware(['auth'])->group(function () {
    // Routes that require authentication
    Route::get('/', function () {
        return view('home');
    })->name('home');
    // Route::get('/home', function () {
    //     return view('home');
    // })->name('home');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/about', function () {
        return view('about');
    })->name('about');


    Route::get('/admin', function () {
        return view('admin/dashboard');
    })->name('admin');
    Route::get('/user',[authController::class,'getusers'])->name('user.all');
    Route::get('/user/add',[authController::class,'signuppost'])->name('user.add');
    Route::delete('/user/delete',[authController::class,'deleteuser'])->name('user.delete');
    Route::put('/user/{id}/edit',[authController::class,'edituser'])->name('user.edit');

    Route::get('/appointment',[appointmentController::class,'getappointmets'])->name('appointment.all');
    Route::get('/appointment/edit',[appointmentController::class,'admindeleteappo'])->name('appointment.edit');



    Route::get('/contact', [contactusController::class,'index'])->name('contact.index');
    Route::post('/contact', [contactusController::class,'store'])->name('contact.post');

    Route::get('/yorder', [appointmentController::class,'index'])->name('user.appointments');
    Route::post('/yorder',[appointmentController::class,'store'])->name('store.appointment');
    Route::delete('/deleteappo',[appointmentController::class,'deleteappo'])->name('delete.appointment');
    Route::put('/yorder/{id}', [appointmentController::class, 'updateappo'])->name('edit.appointment');

    Route::get('/logout', [authController::class, 'logout'])->name('logout');
});
Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/login', [authController::class, 'loginpost'])->name('login.post');
Route::get('/signup', [authController::class, 'signup'])->name('signup');
Route::post('/signup', [authController::class, 'signuppost'])->name('signup.post');
Route::get('/logout', [authController::class, 'logout'])->name('logout');
