<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Factor;
use App\Http\Requests;

class SearchController extends Controller
{
    public function index(){

	    $factor1 = Factor::where('type', '映画種類')->get();
	    $factor2 = Factor::where('type', 'シチュエーション')->get();

    	return view('toppage', ['factor1' => $factor1->toArray(),'factor2' => $factor2->toArray()]);

    }

    public function show(){
    	//Model からデータを取得、全件DUMPするコードを記載
    	return view('show', ['testvalue' => 'show']);

    }
}
