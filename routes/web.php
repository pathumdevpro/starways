<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AccountController as AdminAccountController;
use App\Http\Controllers\Admin\BaseController as AdminBaseController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {
    Route::prefix('/')->group(function () {
        Route::middleware('guest')->group(function () {
            Route::match(['GET', 'POST'], '/register', [AuthenticationController::class, 'register'])->name('register');
            Route::match(['GET', 'POST'], '/login', [AuthenticationController::class, 'login'])->name('login');
            Route::match(['GET', 'POST'], '/forgot-password', [AuthenticationController::class, 'forgotPassword'])->name('forgot-password');
            Route::match(['GET', 'POST'], '/reset-password', [AuthenticationController::class, 'resetPassword'])->name('reset-password');
        });
        Route::middleware('auth')->group(function () {
            Route::match(['GET', 'POST'], '/logout', [AuthenticationController::class, 'logout'])->name('logout');
        });
        Route::resource('/', BaseController::class)->only(['index'])->names(['index' => 'index']);
        Route::get('services/business-setup', [ServiceController::class, 'business_setup'])->name('services.business-setup');
        Route::get('services/company-registration-mainland', [ServiceController::class, 'company_registration_mainland'])->name('services.company-registration-mainland');
        Route::get('services/company-registration-freezone', [ServiceController::class, 'company_registration_freezone'])->name('services.company-registration-freezone');
        Route::get('services/office-flexi-desk-arrangement', [ServiceController::class, 'office_flexi_desk_arrangement'])->name('services.office-flexi-desk-arrangement');
        Route::get('services/corporate-pro-services', [ServiceController::class, 'corporate_pro_services'])->name('services.corporate-pro-services');
        Route::get('services/corporate-tax-registration', [ServiceController::class, 'corporate_tax_registration'])->name('services.corporate-tax-registration');
        Route::get('services/tax-and-vat', [ServiceController::class, 'tax_and_vat'])->name('services.tax-and-vat');
        Route::get('services/the-will', [ServiceController::class, 'the_will'])->name('services.the-will');
        Route::get('services/immigration-services', [ServiceController::class, 'immigration_services'])->name('services.immigration-services');
        Route::get('services/uae-golden-visa', [ServiceController::class, 'uae_golden_visa'])->name('services.uae-golden-visa');
        Route::resource('blogs', BlogController::class)->only(['index', 'show'])->names(['index' => 'blogs.index']);
        Route::resource('about', AboutController::class)->only(['index'])->names(['index' => 'about.index']);
        Route::resource('contact', ContactController::class)->only(['index'])->names(['index' => 'contact.index']);
    });

    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::middleware('auth')->group(function () {
            Route::resource('/', AdminBaseController::class)->only(['index']);
            Route::get('/accounts/profile', [AdminAccountController::class, 'profile'])->name('accounts.profile');
            Route::put('/accounts/update-password', [AdminAccountController::class, 'updatePassword'])->name('accounts.update-password');
        });
    });
});