<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webarq\Model\InformasiModel;
use App\Http\Controllers\Site\BaseController;
class SearchController extends BaseController
{
    function index(){
    	$data = InformasiModel::where('description', 'like','%'.$_GET['d'].'%')->limit(1)->get();
    	dd($data[0]->image);
    	$view = "vendor.webarq.themes.front-end.layout.search";
        return view($view, ['metaTitle'=>$_GET['d'],'data' => $data] );
    }
}
