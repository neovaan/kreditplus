<?php

namespace App\Http\Controllers\Site\Templates;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\BaseController;
use App\Webarq\Model\ProdukModel;
use Wa;
class ProdukController extends BaseController
{
    public function actionGetIndex(){
    	$menu = Wa::menu()->getActive()->eloquent()->getAttributes();
    	$produk = ProdukModel::select('image','title','intro','link')->where('link','!=',$menu['permalink'])->orderBy('id','desc')->get();
    	view()->share(['produk'=>$produk]);
    	parent::actionGetIndex();
    }
}
