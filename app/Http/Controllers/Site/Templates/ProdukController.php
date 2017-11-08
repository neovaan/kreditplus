<?php

namespace App\Http\Controllers\Site\Templates;

use Illuminate\Http\Request;
use App\Http\Controllers\Site\BaseController;
use App\Webarq\Model\ProdukModel;

class ProdukController extends BaseController
{
    public function actionGetIndex(){
    	//$produk = ProdukModel::select('')
    	parent::actionGetIndex();
    }
}
