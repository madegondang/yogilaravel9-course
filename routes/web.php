<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('auth.login');
})->middleware(['guest','prevent-back-history']);

Route::middleware(['auth','verified'])->group(function () {
    Route::get('home', function () {
        return view('dashboard.home');
    })->name('home')->middleware('can:home');
    Route::get('admin', function () {
        return view('dashboard.admin');
    })->name('admin')->middleware('can:admin');
    Route::get('superadmin', function () {
        return view('dashboard.superadmin');
    })->name('superadmin')->middleware('can:superadmin');
    
    

    Route::get('edit-profile', function(){
        return view('dashboard.profile');
    })->name('profile.edit');
});
        // if (Auth::check()) {
        //     if (Auth::user()->role =='superadmin'){
        //         return view('dashboard.home');
        //     }
        //     if (Auth::user()->role =='admin') {
        //         return view('dashboard.baru');
        //     }
        //     if (Auth::user()->role =='user') {
        //         return view('dashboard.user');
        //     }
        // }