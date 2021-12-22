<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopPageContrlller;

#トップページの表示(top_page)
Route::get('/', [TopPageContrlller::class, 'top_page'])
->name('top_page');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
