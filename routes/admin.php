<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;

Route::prefix('admin')->name('admin.')->group(function () {
    // Login Routes
    Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');

    // Apply auth middleware to protect routes
    Route::group(['middleware' => 'islogin'], function () {
        Route::match(['get', 'post'], '/logout', [AuthController::class, 'logout'])->name('logout');

        // Home Controller
        Route::match(['get', 'post'], '/', [HomeController::class, 'index'])->name('home');
        Route::match(['get', 'post'], 'privacy_policy', [HomeController::class, 'privacy_policy'])->name('privacy_policy');
        Route::match(['get', 'post'], 'terms_condition', [HomeController::class, 'terms_condition'])->name('terms_condition');
        Route::match(['get', 'post'], 'newsletter', [HomeController::class, 'newsletter'])->name('newsletter');

        // Role Controller
        Route::match(['get', 'post'], '/view_role', [RoleController::class, 'viewRoles'])->name('view_role');
        Route::match(['get', 'post'], '/add_role', [RoleController::class, 'addRoles'])->name('add_role');
        Route::match(['get', 'post'], '/edit_role/{id}', [RoleController::class, 'editRoles'])->name('edit_role');
        Route::match(['get', 'post'], '/delete_role', [RoleController::class, 'deleteRoles'])->name('delete_role');
        Route::match(['get', 'post'], '/change_role_status', [RoleController::class, 'changeRoleStatus'])->name('change_role_status');

        // User Controller
        Route::match(['get', 'post'], '/view_user', [UserController::class, 'viewUsers'])->name('view_user');
        Route::match(['get', 'post'], '/add_user', [UserController::class, 'addUsers'])->name('add_user');
        Route::match(['get', 'post'], '/edit_user/{id}', [UserController::class, 'editUsers'])->name('edit_user');
        Route::match(['get', 'post'], '/delete_user', [UserController::class, 'deleteUsers'])->name('delete_user');
        Route::match(['get', 'post'], '/change_user_status', [UserController::class, 'changeUserStatus'])->name('change_user_status');

        // Faq Controller
        Route::match(['get', 'post'], '/view_faqs', [FaqController::class, 'viewFaqs'])->name('view_faqs');
        Route::match(['get', 'post'], '/add_faqs', [FaqController::class, 'addFaqs'])->name('add_faqs');
        Route::match(['get', 'post'], '/edit_faqs/{id}', [FaqController::class, 'editFaqs'])->name('edit_faqs');
        Route::match(['get', 'post'], '/delete_faqs', [FaqController::class, 'deleteFaqs'])->name('delete_faqs');
        Route::match(['get', 'post'], '/change_faq_status', [FaqController::class, 'changeFaqStatus'])->name('change_faq_status');


        // Banner Controller
        Route::match(['get', 'post'], '/view_banner', [BannerController::class, 'viewBanners'])->name('view_banner');
        Route::match(['get', 'post'], '/add_banner', [BannerController::class, 'addBanners'])->name('add_banner');
        Route::match(['get', 'post'], '/edit_banner/{id}', [BannerController::class, 'editBanners'])->name('edit_banner');
        Route::match(['get', 'post'], '/delete_banner', [BannerController::class, 'deleteBanners'])->name('delete_banner');
        Route::match(['get', 'post'], '/change_banner_status', [BannerController::class, 'changeBannerStatus'])->name('change_banner_status');

        // Product Controller

        // Category
        Route::match(['get', 'post'], '/view_categories', [ProductController::class, 'viewCategories'])->name('view_categories');
        Route::match(['get', 'post'], '/add_categories', [ProductController::class, 'addCategories'])->name('add_categories');
        Route::match(['get', 'post'], '/edit_categories/{id}', [ProductController::class, 'editCategories'])->name('edit_categories');
        Route::match(['get', 'post'], '/delete_categories', [ProductController::class, 'deleteCategories'])->name('delete_categories');
        Route::match(['get', 'post'], '/change_categories_status', [ProductController::class, 'changeCategoriesStatus'])->name('change_categories_status');

        // Product Add
        Route::match(['get', 'post'], '/view_product', [ProductController::class, 'viewProduct'])->name('view_product');
        Route::match(['get', 'post'], '/add_product', [ProductController::class, 'addProduct'])->name('add_product');
        Route::match(['get', 'post'], '/edit_product/{id}', [ProductController::class, 'editProduct'])->name('edit_product');
        Route::match(['get', 'post'], '/delete_product', [ProductController::class, 'deleteProduct'])->name('delete_product');
        Route::match(['get', 'post'], '/change_product_status', [ProductController::class, 'changeProductStatus'])->name('change_product_status');
        Route::match(['get', 'post'], '/getProductDetails', [ProductController::class, 'getProductDetails'])->name('getProductDetails');
        Route::match(['get', 'post'], '/deleteProductDetails', [ProductController::class, 'deleteProductDetails'])->name('deleteProductDetails');

        // Setting Controller
        Route::match(['get', 'post'], '/view_setting', [SettingController::class, 'viewSetting'])->name('view_setting');
        Route::match(['get', 'post'], '/edit_setting/{id}', [SettingController::class, 'editSetting'])->name('edit_setting');

        // Profile Controller
        Route::match(['get', 'post'], '/edit_profile/{id}', [ProfileController::class, 'editProfile'])->name('edit_setting');

        // Contact Controller
        Route::match(['get', 'post'], '/contact', [ContactController::class, 'contact'])->name('contact');
    });
});
