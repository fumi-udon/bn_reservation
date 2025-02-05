<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Test1
*/

// トップページを予約フォームにリダイレクト
Route::get('/', function () {
    return redirect()->route('reservation.form');
});

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// キタノ予約ページ
use App\Http\Controllers\ReservationController;

// 予約機能のルート
Route::prefix('reservation')->group(function () {
    Route::get('/', [ReservationController::class, 'showForm'])->name('reservation.form');
    Route::post('/confirm', [ReservationController::class, 'confirm'])->name('reservation.confirm');
    Route::post('/store', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/complete', [ReservationController::class, 'complete'])->name('reservation.complete');
});

Route::get('/reservation_wa', [ReservationController::class, 'reservation_wa'])->name('reservation.wa');

// setting page
use App\Http\Controllers\KiConfigurationController;

Route::resource('ki-configurations', KiConfigurationController::class);

// メールTEST DEBUG ★
Route::get('/fumi', function () {
    return view('fumi');
});
Route::get('/fumi_canard', function () {
    return view('fumi_canard');
});
Route::get('/fumi2', function () {
    return view('fumi2');
});
Route::get('/fumi3', function () {
    return view('fumi3');
});
Route::get('/fumi4', function () {
    return view('fumi4');
});
Route::get('/fumi5', function () {
    return view('fumi5');
});
Route::get('/fumi6', function () {
    return view('fumi6');
});
Route::get('/fumi7', function () {
    return view('fumi7');
});
Route::get('/fumi8', function () {
    return view('fumi8');
});
Route::get('/fumi_cartevisite', function () {
    return view('fumi_cartevisite');
});
Route::get('/fumi_ki_cartevisite', function () {
    return view('fumi_ki_cartevisite');
});
Route::get('/fumi_canard2', function () {
    return view('fumi_canard2');
});
Route::get('/fumi_base1', function () {
    return view('fumi_base1');
});
// fumi_carte_jesser
Route::get('/fumi_carte_jesser', function () {
    return view('fumi_carte_jesser');
});
Route::get('/fumi_carte_jesser2', function () {
    return view('fumi_carte_jesser2');
});
// fumi_carte_jesser
Route::get('/fumi_credo', function () {
    return view('fumi_credo');
});
// fumi_sardine
Route::get('/fumi_sardine', function () {
    return view('fumi_sardine');
});
// fumi_annin
Route::get('/fumi_annin', function () {
    return view('fumi_annin');
});
