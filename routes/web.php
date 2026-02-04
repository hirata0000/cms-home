<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InquiryController;

/* お問い合わせフォーム */
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::post('/contact/confirm',[ContactController::class,'confirm'])->name('contact.confirm');
Route::post('/contact/send',[ContactController::class,'send'])->name('contact.send');
/* ログイン */
Route::get('/login',[LoginController::class,'showLoginForm'])->name('login.show');
Route::post('/login',[LoginController::class,'login'])->name('login.submit');
/* 管理画面TOP */
Route::view('/admin', 'admin.index')->name('admin.index');
/* アカウント情報 */
Route::resource('users', UserController::class)
->only(['index','create','store','edit','update']);
/* 問い合わせ情報 */
Route::resource('inquiries', InquiryController::class)
->only(['index','edit','update']);


