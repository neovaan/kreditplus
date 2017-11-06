<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 6/15/2017
 * Time: 11:23 AM
 */

namespace App\Http\Controllers\Site\Templates;

use App\Http\Controllers\Site\BaseController;
use App\Webarq\Model\InformasiModel;
use App\Webarq\Model\FooterModel;
use Wa;
use DB;
class InformasiController extends BaseController
{
    public function actionGetRead($id){

        $data = InformasiModel::selectTranslate('title','intro','description','permalink')->addSelect('image')->whereTranslate('permalink',$id)->get();
        $list = InformasiModel::where('type','=',$data[0]->type)->where('id','!=',$data[0]->id)->limit(2)->get();
        $footer = FooterModel::selectTranslate('txt1','txt2')->addSelect('image')->get();
        $view = "vendor.webarq.themes.front-end.layout.detail_informasi";
        return view($view, ['metaTitle'=>$id,'data' => $data, 'list'=>$list,'footer'=>$footer] );
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