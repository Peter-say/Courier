<?php

use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Web\ServicesController;
use App\Http\Controllers\Web\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/' , [WelcomeController::class, 'welcome']);
Route::prefix('web')->as('web.')->group(function () {

    Route::get('/contact-us' , [WelcomeController::class, 'contactUs'])->name('contact-us');
    Route::get('/about-us' , [WelcomeController::class, 'aboutUs'])->name('about-us');


    Route::prefix('service')->as('service.')->group(function () {
        Route::get('/' , [ServicesController::class, 'index']);
    });

});

Auth::routes();

Route::prefix('dashboard')->as('dashboard.')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

});
