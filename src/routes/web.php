<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function() {
    return redirect('/contact');
});


Route::get('/contact', [ContactController::class,'contact']); //お問い合わせフォームの入力画面
Route::post('/confirm', [ContactController::class,'confirm']); //お問い合わせフォームの確認画面
Route::post('/confirm', [ContactController::class,'confirm']);



Route::get('/thanks', [ContactController::class,'thanks']); //サンクスページ
Route::get('/register', [ContactController::class,'register']); //登録ページ
Route::get('/login', [ContactController::class,'login']); //ログインページ
Route::get('/admin', [ContactController::class,'admin']); //管理画面
