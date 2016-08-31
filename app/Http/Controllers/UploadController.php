<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Factor;
use App\Movie;
use App\Review;
use App\Http\Requests;

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


	public function postIndex(){

	  // アップロード画像を取得
	  $image = Input::file('image');
	 
	  // ファイル名を生成し画像をアップロード
	  $name = md5(sha1(uniqid(mt_rand(), true))).'.'.$image->getClientOriginalExtension();
	  $upload = $image->move('media', $name);
	 
	  // アップロード成功のメッセージを定義
	  $data = array(
	    'success' => '画像がアップロードされました',
	  );
	 
	  // メッセージをセッションに格納しリダイレクト
	  return Redirect::to(URL::to('/movieCreate'))
	    ->with($data);
	}


}
