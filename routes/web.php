<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopPageContrlller;

#トップページの表示(top_page)
Route::get('/', [TopPageContrlller::class, 'top_page'])
->name('top_page');


# Worksの編集ページ(works)
Route::get('works', [TopPageContrlller::class, 'works'])
->name('works');


Route::get('test', function(){
    return 'test';
})
->name('test');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
