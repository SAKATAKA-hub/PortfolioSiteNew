<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TopPageContrlller extends Controller
{
    /**
     * トップページの表示(top_page)
     *
     * @return \Illuminate\View\View
     */
    public function top_page()
    {

        # Works情報の登録
        $works = [];

        $works[] = [
            'title' => 'My note',
            'body' => <<<__
            web上に自分の残したいノートを保存できるブログ型のノートアプリです。
            __ ,
            'image' => 'storage/img/note/mynote_top.png',
            'app_path' => 'https://sakataka.jellybean.jp/laravel-note/public/',
            'introduction_path' => 'https://sakataka.jellybean.jp/laravel-note/public/note/9',
            'github_path' => 'https://github.com/SAKATAKA-hub/laravel-note',
        ];


        return view('top_page',
            compact('works')
        );
    }



    /**
     * Worksの編集ページ(works)
     *
     * @return \Illuminate\View\View
     */
    public function works()
    {
        return view('works');
    }


}
