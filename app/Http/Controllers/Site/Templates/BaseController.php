<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 12/19/2016
 * Time: 6:22 PM
 */

namespace App\Http\Controllers\Site\Templates;


use App\Http\Controllers\Site\BaseController as Base;
use App\Webarq\Model\TestimoniUserModel;
use App\Webarq\Model\InformasiModel;

class BaseController extends Base
{
   function actionGetIndex(){
        $data = InformasiModel::selectTranslate('title','intro','description','permalink')->addSelect('image','type')->limit(3)->get();
        $testimoni = TestimoniUserModel::selectTranslate('pesan')->addSelect('nama','pekerjaan','image_user')->limit(3)->get();
        view()->share(['info'=>$data,'testimoni'=>$testimoni]);
        parent::actionGetIndex();
   }
}