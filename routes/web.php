<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [FeedbackController::class, 'index'])->name('home');
Route::post('/', [FeedbackController::class, 'store'])->name('feedback');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

Route::get('/about', function () {
    return view('about');
})->name('about');
