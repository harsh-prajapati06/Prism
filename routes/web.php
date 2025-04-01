<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsLetterController;

Route::match(['get', 'post'], 'coming-soon', [HomeController::class, 'comingSoon']);

// Route::middleware(['ComingSoon'])->group(function () {
// });
    Route::match(['get', 'post'], '/', [HomeController::class, 'index']);
    Route::match(['get', 'post'], 'privacy_policy', [HomeController::class, 'privacy_policy']);
    Route::match(['get', 'post'], 'terms_condition', [HomeController::class, 'terms_condition']);
    Route::match(['get', 'post'], 'faq', [HomeController::class, 'faq']);
    Route::match(['get', 'post'], 'getProductDetails', [HomeController::class, 'getProductDetails']);
    Route::match(['get', 'post'], '/contact', [ContactController::class, 'contact']);
    Route::match(['get', 'post'], '/about_us', [AboutController::class, 'aboutUs']);
    Route::match(['get', 'post'], '/newsletter', [NewsLetterController::class, 'newsletter']);