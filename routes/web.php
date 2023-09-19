<?php

use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\ShipmentController;
use App\Http\Controllers\Dashboard\Users\UsersController;
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
    Route::post('/contact-us/submit' , [WelcomeController::class, 'submitContactForm'])->name('contact-us.submit');
    Route::get('/about-us' , [WelcomeController::class, 'aboutUs'])->name('about-us');


    Route::prefix('service')->as('service.')->group(function () {
        Route::get('/' , [ServicesController::class, 'index']);
    });

    Route::prefix('tracking')->as('tracking.')->group(function () {
        Route::get('/' , [WelcomeController::class, 'trackOrderPage']);
        Route::match(['get', 'post'], '/track-shipment', [WelcomeController::class, 'trackShipment'])->name('track-shipment');

    });
    Route::get('tracki');

});

Auth::routes();

Route::prefix('dashboard')->as('dashboard.')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('shipment')->as('shipment.')->group(function () {
        Route::get('/' , [ShipmentController::class, 'index']);
        Route::get('/create' , [ShipmentController::class, 'create'])->name('create');
        Route::post('/' , [ShipmentController::class, 'store'])->name('store');
        Route::get('/{id}/details' , [ShipmentController::class, 'view'])->name('details');
        Route::delete('/{id}', [ShipmentController::class, 'delete'])->name('delete');
        Route::get('/{id}/edit' , [ShipmentController::class, 'edit'])->name('edit');
        Route::put('/{id}' , [ShipmentController::class, 'update'])->name('update');
        Route::put('shipments/update/{id}', [ShipmentController::class, 'updateDeliveryStatus'])->name('update.delivery_status');
    });

    Route::prefix('user')->as('user.')->group(function () {
        Route::get('/index' , [UsersController::class, 'index'])->name('index');
        Route::get('/create' , [UsersController::class, 'create'])->name('create');
        Route::post('/' , [UsersController::class, 'store'])->name('store');
        Route::get('/{id}/edit' , [UsersController::class, 'edit'])->name('edit');
        Route::put('/{id}' , [UsersController::class, 'update'])->name('update');
        Route::delete('/{id}' , [UsersController::class, 'delete'])->name('destroy');
        Route::post('/send-login-details/{userId}', [UsersController::class, 'loginDetails'])->name('send-login-details');


    });
});
