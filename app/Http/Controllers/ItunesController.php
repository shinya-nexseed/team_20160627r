<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ItunesController extends Controller
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

	    	return view('movieCreate', ['data' => $data]);

	}
}