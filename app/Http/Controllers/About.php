<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wa;
use DB;
use View;
class About extends Controller
{
    function index(Request $req){
    	$id="";
    	$request = $req->getRequestUri();
    	foreach(Wa::menu()->getNodes() as $q){
    		if(trim($q['permalink']) == trim($request)){
    			$id = $q['id'];
    			break;
    		}
    	}
    	$content = DB::select("SELECT content_data FROM contents WHERE page_id='".$id."'");
    	$data = array('data'=>$content[0]->content_data);
    	//return View::make('vendor.webarq.themes.front-end.layout.static')->with($data);
    	return view('vendor.webarq.themes.front-end.layout.static');
    }
}
