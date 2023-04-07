<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController as ControllersAuthController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'landingPage'])->name('home');
Route::get('/school', [FrontendController::class, 'schoolPage'])->name('school');
Route::get('/events', [FrontendController::class, 'eventPage'])->name('events');
Route::get('/about-us', [FrontendController::class, 'aboutUsPage'])->name('about-us');
Route::get('/contact', [FrontendController::class, 'contactPage'])->name('contact');
Route::get('/blog', [FrontendController::class, 'blogPage'])->name('blog');
Route::get('/join-team', [FrontendController::class, 'teamsPage'])->name('teams');
Route::get('/faq', [FrontendController::class, 'faqPage'])->name('faqs');
Route::get('/privacy', [FrontendController::class, 'privacyPage'])->name('privacy');
Route::get('/terms-condition', [FrontendController::class, 'termsAndConditionPage'])->name('terms.condition');


Route::get('login', [ControllersAuthController::class, 'login'])->name('login');
Route::get('register', [ControllersAuthController::class, 'register'])->name('register');
Route::post('register', [ControllersAuthController::class, 'submitRegister'])->name('register.submit');


Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('login',[AuthController::class,'submit_login'])->name('login.submit');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('home');
        Route::post('logout',[AuthController::class,'logout'])->name('logout');
    });

});
