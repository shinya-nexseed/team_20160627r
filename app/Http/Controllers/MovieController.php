<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests;

class MovieController extends Controller
{

    public function create(){

		return view('movieCreate');

    }


    public function store() {
        // ①フォームの入力値を取得
        $inputs = \Request::all();
 
        // ②マスアサインメントを使って、記事をDBに作成
        Article::create($inputs);
 
        // ③記事一覧へリダイレクト
        return redirect('articles');
    }

}
