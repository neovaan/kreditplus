<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 12/19/2016
 * Time: 6:22 PM
 */

namespace App\Http\Controllers\Site\Templates;


use App\Http\Controllers\Site\BaseController;
use Wa;
use DB;
class HomeController extends BaseController
{
   function actionGetIndex(){
        $data = DB::select("SELECT * FROM informasi LIMIT 3");
        $data = json_decode(json_encode($data),true);
        $testimoni = DB::select("SELECT nama,pesan FROM testimoni LIMIT 3");
        $testimoni = json_decode(json_encode($testimoni),true);
        view()->share(['info'=>$data,'testimoni'=>$testimoni]);
        parent::actionGetIndex();
   }
}