<?php

use App\Http\Controllers\AutoTaskController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

if (version_compare(PHP_VERSION, '7.1.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

// Cron URL
Route::get('/cron', [AutoTaskController::class, 'autotopup'])->name('cron');

// Front Pages Routes
Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('about', [HomePageController::class, 'about'])->name('about');
Route::get('accounts', [HomePageController::class, 'accounts'])->name('accounts');
Route::get('credit-cards', [HomePageController::class, 'creditCards'])->name('credit-cards');
Route::get('cards', [HomePageController::class, 'creditCards'])->name('cards');
Route::get('mortgages', [HomePageController::class, 'mortgages'])->name('mortgages');
Route::get('loans', [HomePageController::class, 'loans'])->name('loans');
Route::get('investments', [HomePageController::class, 'investments'])->name('investments');
Route::get('business', [HomePageController::class, 'business'])->name('business');
Route::get('commercial', [HomePageController::class, 'commercial'])->name('commercial');
Route::get('digital-banking', [HomePageController::class, 'digitalBanking'])->name('digital-banking');
Route::get('rates', [HomePageController::class, 'rates'])->name('rates');
Route::get('calculators', [HomePageController::class, 'calculators'])->name('calculators');
Route::get('locations', [HomePageController::class, 'locations'])->name('locations');
Route::get('rewards', [HomePageController::class, 'rewards'])->name('rewards');
Route::get('security', [HomePageController::class, 'security'])->name('security');
Route::get('advice', [HomePageController::class, 'advice'])->name('advice');
Route::get('help', [HomePageController::class, 'help'])->name('help');
Route::get('faq', [HomePageController::class, 'help'])->name('faq');
Route::get('contact', [HomePageController::class, 'contact'])->name('contact');
Route::get('careers', [HomePageController::class, 'careers'])->name('careers');
Route::get('newsroom', [HomePageController::class, 'newsroom'])->name('newsroom');
Route::get('investors', [HomePageController::class, 'investors'])->name('investors');
Route::get('accessibility', [HomePageController::class, 'accessibility'])->name('accessibility');
Route::get('privacy-policy', [HomePageController::class, 'privacy'])->name('privacy');
Route::get('privacy', [HomePageController::class, 'privacy']);
Route::get('terms', [HomePageController::class, 'terms'])->name('terms');
Route::get('terms-of-service', [HomePageController::class, 'terms']);
Route::get('send-money', [HomePageController::class, 'sendMoney'])->name('send-money');
Route::get('services', [HomePageController::class, 'services'])->name('services');
Route::get('alerts', [HomePageController::class, 'alerts'])->name('alerts');
Route::get('apps', [HomePageController::class, 'apps'])->name('apps');
Route::get('chart', [HomePageController::class, 'chart'])->name('chart');

// Verification & Forms
Route::get('verify', [HomePageController::class, 'verify'])->name('verify');
Route::post('codeverify', [HomePageController::class, 'codeverify'])->name('codeverify');
Route::post('homesendcontact', [HomePageController::class, 'homesendcontact'])->name('homesendcontact');
Route::post('enquiryfront', [HomePageController::class, 'enquiryfront'])->name('enquiryfront');
