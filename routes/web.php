<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\Auth\ChangePasswordController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ExamCategoryController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\GoalController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ScraperController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::redirect('/login', '/admin/login')->name('login');
Route::redirect('/home', '/');

Auth::routes(['login' => false, 'register' => false]);

Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['admin']], function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::delete('/contacts/{contact}', [DashboardController::class, 'destroy'])->name('contacts.destroy');

        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile', [ProfileController::class, 'update'])->name('profile');

        Route::get('/change_password', [ChangePasswordController::class, 'index'])->name('change_password');
        Route::post('/change_password', [ChangePasswordController::class, 'update'])->name('change_password');

        Route::resource('/goals', GoalController::class);
        Route::resource('/events', EventController::class);
        Route::resource('/articles', ArticleController::class);
        Route::resource('/exam_categories', ExamCategoryController::class);
        Route::resource('/exams', ExamController::class);
        Route::resource('/pages', PageController::class);

        Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
        Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');

        
        Route::get('/scraper', [ScraperController::class, 'index'])->name('scraper.index');
    });
});

Route::get('/goals/{slug}', [App\Http\Controllers\GoalController::class, 'show'])->name('goals.show');
Route::get('/events/{slug}', [App\Http\Controllers\EventController::class, 'show'])->name('events.show');
Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');
Route::get('/exams/{slug}', [App\Http\Controllers\ExamController::class, 'show'])->name('exams.show');
Route::post('/enquiry', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{slug}', [App\Http\Controllers\HomeController::class, 'show'])->name('home.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
