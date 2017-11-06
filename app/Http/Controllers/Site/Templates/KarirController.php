<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 6/15/2017
 * Time: 11:23 AM
 */

namespace App\Http\Controllers\Site\Templates;


use Illuminate\Http\Request;
use App\Http\Controllers\Site\BaseController;
use App\Webarq\Model\ContentKarirModel;
class KarirController extends BaseController
{
    public function actionGetIndex(){
       $data = ContentKarirModel::selectTranslate('txt1','txt2')->addSelect('email')->get();
       view()->share(['karir'=>$data]);
    	 parent::actionGetIndex();
    }
}