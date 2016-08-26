<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Factor;
use App\Movie;
use App\Http\Requests;

class SearchController extends Controller
{
    public function index(){

    	//検索条件を取得
	    $factor1 = Factor::where('type', '映画種類')->get();
	    $factor2 = Factor::where('type', 'シチュエーション')->get();

    	return view('toppage', ['factor1' => $factor1->toArray(),'factor2' => $factor2->toArray()]);
    }


    public function show($fact1,$fact2,$fact3){
	    $movie = Movie::where('movie_id', $id)->get();

	    //レコメンド
	    //	1.factにマッチする条件を全件取得
	    //	2.その中からランダムに１件表示


    	return view('show', ['data' => $movie->toArray()]);
    }
}
