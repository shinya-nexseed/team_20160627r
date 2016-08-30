<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Factor;
use App\Movie;
use App\Review;
use App\Http\Requests;

class SearchController extends Controller
{
    public function index(){

    	//検索条件を取得
	    $factor1 = Factor::where('type', '映画種類')->get();
	    $factor2 = Factor::where('type', 'シチュエーション')->get();

    	return view('toppage', ['factor1' => $factor1->toArray(),'factor2' => $factor2->toArray()]);
    }



    public function show(){

    	$fact1 = $_GET['factor1'];
    	$fact2 = $_GET['factor2'];
    	$fact3 = $_GET['factor3'];

    	// 検索条件に合わせて、ランダムな1件を抽出
	    // (1) factor1 にマッチするデータを取得
	    // (2) (1)からfactor2,3にマッチするデータをそれぞれ取得
    	// (3) その中からランダムに１件表示

    	// (1)factor1にマッチするデータを取得
	    $data = Movie::where('factor1_1',$fact1)
	    	->orWhere('factor1_2', $fact1)
	    	->orWhere('factor1_3', $fact1)
	    	->get();


	    // (2) fact2に該当する条件のみを取得
    	foreach ($data->toArray() as $key => $value) {
    		if($value['factor2_1'] == $fact2){
    			if($value['factor2_2'] == $fact3){
    				$movies[] = $value;
    			}
    		}

    		if($value['factor2_2'] == $fact2){
    			if($value['factor2_1'] == $fact3){
    				$movies[] = $value;
    			}
    		}
    	}

	    // (3) ランダムに1件検索
    	$movie = $movies[rand(0,count($movies)-1)];


        // レビューコメントを取得
        $reviews = Review::where('movie_id',$movie['movie_id'])->get()->toArray();

    	return view('show', ['movie' => $movie],['reviews' => $reviews]);

    }
}
