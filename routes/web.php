<?php

use App\Http\Controllers\Backend\Settings\AcademicController;
use App\Http\Controllers\Backend\Settings\MailsController;
use App\Http\Controllers\Backend\Settings\SeoController;
use App\Http\Controllers\Backend\Settings\SocialLinkController;
use App\Http\Controllers\Backend\User\PermissionsController;
use App\Http\Controllers\Backend\User\ProfileController;
use App\Http\Controllers\Backend\User\RolesPermissionsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('permissions', PermissionsController::class);
    Route::resource('rps', RolesPermissionsController::class)->except('show');
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile');
    Route::post('storePassword', [ProfileController::class, 'storePassword'])->name('storePassword');
    Route::get('localization', [MailsController::class, 'index'])->name('localization');
    Route::post('localization', [MailsController::class, 'localization'])->name('localization');
    Route::get('emailsettings', [MailsController::class, 'mailSettings'])->name('emailsettings');
    Route::post('emailsettings', [MailsController::class, 'settingsMail'])->name('emailsettings');
    Route::get('social-links', [MailsController::class, 'socialLinks'])->name('social_links');
    Route::post('store/social-links', [MailsController::class, 'storeSocialLinks'])->name('social_links.store');
    Route::get('seo-settings', [MailsController::class, 'seoSettings'])->name('seo_settings');
    Route::post('seo-settings/store', [MailsController::class, 'seoSettings'])->name('seo_settings.store');
    Route::get('settings', [MailsController::class, 'general'])->name('settings');
    Route::post('settings', [MailsController::class, 'storeGeneral'])->name('settings');
    Route::resource('academic_sessions', AcademicController::class)->except('show', 'create');
});
