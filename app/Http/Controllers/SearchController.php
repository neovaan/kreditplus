<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webarq\Model\InformasiModel;
use App\Webarq\Model\FooterModel;
use App\Http\Controllers\Site\BaseController;
class SearchController extends BaseController
{
    function index(Request $r){
    	$data = InformasiModel::where('description', 'like','%'.$r->input('d').'%')->get();
    	$footer = FooterModel::selectTranslate('txt1','txt2')->addSelect('image')->get();
    	$view = "vendor.webarq.themes.front-end.layout.search";
        return view($view, ['metaTitle'=>$r->input('d'),'data' => $data,'footer'=>$footer] );
    }
}
