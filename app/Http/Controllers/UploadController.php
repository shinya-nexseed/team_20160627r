<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Factor;
use App\Movie;
use App\Review;
use App\Http\Requests;
use Carbon\Carbon;


class UploadController extends Controller
{

    public function fetch(){

		if(isset($_GET["movie_title"])){

			$movie_title = $_GET["movie_title"];

			/**** データ取得URLのパラメータを設定 ****/
			$GET_URL =  "https://itunes.apple.com/search";
			$GET_URL .= "?term=". urlencode($movie_title);
			$GET_URL .= "&media=".urlencode("movie");
			$GET_URL .= "&entity=".urlencode("movie");
			$GET_URL .= "&country=".urlencode("jp");
			$GET_URL .= "&lang=".urlencode("ja_jp");
			$GET_URL .= "&limit=".urlencode("1");

			$json = file_get_contents($GET_URL);
			$data_denali = json_decode($json,TRUE);
			$data = $data_denali['results'][0];

		}else{
	    	$data = "";
		}

    	//検索条件を取得
	    $factor1 = Factor::where('type', '映画種類')->get();
	    $factor2 = Factor::where('type', 'シチュエーション')->get();

    	return view('movieCreate', [
    		'data' => $data, 
    		'factor1' => $factor1->toArray(), 
    		'factor2' => $factor2->toArray() 
    	]);
	}



	public function postCheck(){

    	//検索条件を取得
	    $factor1 = Factor::where('type', '映画種類')->get();
	    $factor2 = Factor::where('type', 'シチュエーション')->get();

    	return view('movieCreateCheck', [
    		'factor1' => $factor1->toArray(), 
    		'factor2' => $factor2->toArray() 
    	]);

	}


	public function store(Request $request){

        //make movie object
        $movie = Movie::create();

		$movie->user_id = 1;
		$movie->created = Carbon::now();
		$movie->modified = Carbon::now();

		$movie->image = $request->image;
		$movie->title = $request->movie_title;
		$movie->introduce = $request->introduce;
		$movie->cast = $request->cast;
		$movie->release_day = $request->release_day;
		$movie->age_regulation = $request->age_regulation;
		$movie->factor1_1 = $request->factor1_1;
		$movie->factor1_2 = $request->factor1_2;
		$movie->factor1_3 = $request->factor1_3;
		$movie->factor2_1 = $request->factor2;

        $movie->save();

        echo "投稿に成功しました";

	}


}
