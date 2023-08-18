<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ViewMailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PreviewTemplateController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[LoginController::class ,'showLogin'])->name('login');
Route::post('/login',[LoginController::class ,'login'])->name('sign-login');



    Route::post('/logout',[LogoutController::class,'logout'])->name('logout');

    Route::get('/dashboard',[DashboardController::class ,'showDashboard'])->name('dashboard')->middleware('auth');

    Route::post('/add-email',[DashboardController::class ,'add_email'])->name('add_email')->middleware('auth');
    Route::post('/delete-email/{id}',[DashboardController::class ,'delete_email'])->name('delete_email')->middleware('auth');

    Route::get('/mail',[MailController::class ,'mail'])->name('mail');
    Route::get('/compose-mail',[MailController::class ,'showComposeMail'])->name('compose-mail')->middleware('auth');
    Route::post('/store-compose-mail',[MailController::class ,'storeComposeMail'])->name('store-compose-mail')->middleware('auth');
    Route::get('/edit-mail/{id}',[MailController::class ,'showEditMail'])->name('show-edit-mail')->middleware('auth');


    Route::get('/send-mail/{id}',[MailController::class ,'showSendMail'])->name('show-send-mail')->middleware('auth');
    Route::get('/email-send-mail/{id}',[MailController::class ,'showEmailSendMail'])->name('email-show-send-mail')->middleware('auth');
    Route::post('/send',[MailController::class ,'send'])->name('send')->middleware('auth');




    Route::get('/history',[HistoryController::class ,'showHistory'])->name('history')->middleware('auth');


    //mail routes
    Route::get('/mail/binance',[ViewMailController::class ,'viewBinance'])->name('binance')->middleware('auth');
    Route::get('/mail/kucoin',[ViewMailController::class ,'viewKucoin'])->name('kucoin')->middleware('auth');
    Route::get('/mail/latoken',[ViewMailController::class ,'viewLatoken'])->name('latoken')->middleware('auth');
    Route::get('/mail/bitpay',[ViewMailController::class ,'viewBitpay'])->name('bitpay')->middleware('auth');
    Route::get('/mail/kraken',[ViewMailController::class ,'viewKraken'])->name('kraken')->middleware('auth');

    //mail routes
    Route::get('/mail/preview/{id}/{msg}',[PreviewTemplateController::class ,'preview'])->name('preview')->middleware('auth');
    // Route::get('/mail/preview/kucoin/{id}',[PreviewTemplateController::class ,'previewKucoin'])->name('kucoin')->middleware('auth');
