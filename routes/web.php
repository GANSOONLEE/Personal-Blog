<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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

Route::get('/', [ViewController::class, 'index'])->name('home');
Route::get('pages/about-me', [ViewController::class, 'about_me'])->name('about-me');
Route::get('pages/service', [ViewController::class, 'service'])->name('service');
Route::get('pages/contact-me', [ViewController::class, 'contact_me'])->name('contact-me');

Route::get('user/register', [ViewController::class, 'register'])->name('register');
Route::get('user/login', [ViewController::class, 'login'])->name('login');


