<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\SchoolTagController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\AuthController as ControllersAuthController;
use App\Http\Controllers\BotManController;
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
Route::get('school', [FrontendController::class, 'schoolPage'])->name('school');
Route::get('school-details/{slug}', [FrontendController::class, 'schoolDetails'])->name('school.details');
Route::post('school-review/{slug}', [FrontendController::class, 'schoolReview'])->name('school.review');
Route::post('school-filter', [FrontendController::class, 'schoolFilter'])->name('school.filter');
Route::get('search', [FrontendController::class, 'search'])->name('search');
Route::get('events', [FrontendController::class, 'eventPage'])->name('events');
Route::get('event-details/{slug}', [FrontendController::class, 'eventDetails'])->name('events.details');
Route::get('/about-us', [FrontendController::class, 'aboutUsPage'])->name('about-us');
Route::get('blog', [FrontendController::class, 'blogPage'])->name('blog');
Route::get('blog-details/{slug}', [FrontendController::class, 'blogDetails'])->name('blog.details');
Route::post('blog-review/{slug}', [FrontendController::class, 'blogReview'])->name('blog.review');
Route::get('/contact', [FrontendController::class, 'contactPage'])->name('contact');
Route::post('contact', [FrontendController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/join-team', [FrontendController::class, 'teamsPage'])->name('teams');
Route::get('/faq', [FrontendController::class, 'faqPage'])->name('faqs');
Route::get('/privacy', [FrontendController::class, 'privacyPage'])->name('privacy');
Route::get('/terms-condition', [FrontendController::class, 'termsAndConditionPage'])->name('terms.condition');

Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);

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
        Route::get('messages', [DashboardController::class, 'messages'])->name('messages');
        Route::resource('schools', SchoolController::class);
        Route::resource('countries', SchoolTagController::class);
        Route::resource('events', EventController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::post('logout',[AuthController::class,'logout'])->name('logout');
    });

});
