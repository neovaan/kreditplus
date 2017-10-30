<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 6/15/2017
 * Time: 11:23 AM
 */

namespace App\Http\Controllers\Site;


use Wa;
use App\Http\Controllers\Site\BaseController;
use DB;
class InformasiController extends BaseController
{
    public function actionGetRead($id){
        $data = DB::select("SELECT * FROM informasi WHERE id='".$id."'");
        $data = json_decode(json_encode($data),true);
        $list = DB::select("SELECT id,image, title, intro FROM informasi WHERE type='".$data[0]['type']."' AND id NOT IN('".$data[0]['id']."') LIMIT 2");
        $template = Wa::menu()->eloquent()->getAttributes();
        $view = "vendor.webarq.themes.front-end.layout.detail_informasi";
        return view($view, ['metaTitle'=>$data[0]['title'],'data' => $data, 'list'=>$list] );
    }

    // public function actionGetDetail($id){
    //     $data = DB::select("SELECT * FROM informasi WHERE id='".$id."'");
    //     $data = json_decode(json_encode($data),true);
    //     $list = DB::select("SELECT id,image, title, intro FROM informasi WHERE type='".$data[0]['type']."' AND id NOT IN('".$data[0]['id']."') LIMIT 2");
    //     $template = Wa::menu()->eloquent()->getAttributes();
    //     $view = "vendor.webarq.themes.front-end.layout.detail_informasi";
    //     return view($view, ['metaTitle'=>$data[0]['title'],'data' => $data, 'list'=>$list] );
    // }
}