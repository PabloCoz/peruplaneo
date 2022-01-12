<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('plans', [PlanController::class, 'index'])->name('plans');

Route::post('form', [PlanController::class, 'store'])->name('form.plans');

Route::post('forms', [HomeController::class, 'store'])->name('forms.contact');

Route::get('admin', [UserController::class, 'index'])->middleware('auth')->name('admin');

Route::get('admin/contact', [UserController::class, 'contact'])->middleware('auth')->name('admin.contact');

Route::get('admin/plan', [UserController::class, 'plan'])->middleware('auth')->name('admin.plan');