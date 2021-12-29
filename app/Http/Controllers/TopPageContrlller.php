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
            'image' => 'storage/img/note/login1.png',
            'app_path' => 'https://sakataka-laravel-note.herokuapp.com',
            'introduction_path' => 'https://sakataka-laravel-note.herokuapp.com/note/145',
            'github_path' => 'https://github.com/SAKATAKA-hub/laravel-note',
        ];

        $works[] = [
            'title' => 'My note',
            'body' => <<<__
            web上に自分の残したいノートを保存できるブログ型のノートアプリです。
            __,
            'image' => '',
            'app_path' => 'https://sakataka-laravel-note.herokuapp.com',
            'introduction_path' => 'https://sakataka-laravel-note.herokuapp.com/note/95',
            'github_path' => 'https://github.com/SAKATAKA-hub/laravel-note',
        ];
        $works[] = [
            'title' => 'My note',
            'body' => <<<__
            web上に自分の残したいノートを保存できるブログ型のノートアプリです。
            __,
            'image' => '',
            'app_path' => 'https://sakataka-laravel-note.herokuapp.com',
            'introduction_path' => 'https://sakataka-laravel-note.herokuapp.com/note/95',
            'github_path' => 'https://github.com/SAKATAKA-hub/laravel-note',
        ];

        return view('top_page',
            compact('works')
        );
    }


}
