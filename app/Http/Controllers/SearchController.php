<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    public function index(){
    	return view('toppage', ['testvalue' => 'test']);

    }

    public function show($id){
    	//Model からデータを取得、全件DUMPするコードを記載
    	return view('show', ['testvalue' => 'show']);

    }
}
