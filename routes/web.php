<?php

use App\Http\Controllers\LanguageController;
use App\Http\Livewire\About;
use App\Http\Livewire\Courses;
use App\Http\Livewire\Home;
use App\Http\Livewire\Reviews;
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
Route::get('lang/{lang}', [LanguageController::class, 'languageToggle'])->name('lang.toggle');

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/courses', Courses::class)->name('courses');
Route::get('/reviews', Reviews::class)->name('review');

