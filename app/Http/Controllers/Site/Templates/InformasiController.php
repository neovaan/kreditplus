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
use Illuminate\Http\Request;
use Wa;
use DB;
class InformasiController extends BaseController
{
    public function actionGetRead($id){
        $data = InformasiModel::selectTranslate('title','intro','description','permalink')->addSelect('image','type')->whereTranslate('permalink',$id)->get();
        $list = InformasiModel::where('type','=',$data[0]->type)->where('id','==',$data[0]->id)->limit(2)->get();
        $footer = FooterModel::selectTranslate('txt1','txt2')->addSelect('image')->get();
        $view = "vendor.webarq.themes.front-end.layout.detail_informasi";
        return view($view, ['metaTitle'=>$id,'data' => $data, 'list'=>$list,'footer'=>$footer,'metaDescription'=>$data[0]->description] );
    }

    function actionAjaxPostXy(Request $req){
        $val = $req->input('val');
        if($val == ""){
            $data = InformasiModel::selectTranslate('title','intro','description','permalink')->addSelect('image','type')->where('type','berita')->orWhere('type','promo')->get();
        }else{
            $data = InformasiModel::selectTranslate('title','intro','description','permalink')->addSelect('image','type')->where('type',$val)->get();
        }
        if($data->count()){
            echo json_encode(array('response'=>'ok','val'=>$data) );
        }else{
            echo json_encode(array('response'=>'error'));
        }
        die;
    }

    //  public function actionGetIndex(){
    //    dd(';ed');
    // }

    // public function actionGetDetail($id){
    //     $data = DB::select("SELECT * FROM informasi WHERE id='".$id."'");
    //     $data = json_decode(json_encode($data),true);
    //     $list = DB::select("SELECT id,image, title, intro FROM informasi WHERE type='".$data[0]['type']."' AND id NOT IN('".$data[0]['id']."') LIMIT 2");
    //     $template = Wa::menu()->eloquent()->getAttributes();
    //     $view = "vendor.webarq.themes.front-end.layout.detail_informasi";
    //     return view($view, ['metaTitle'=>$data[0]['title'],'data' => $data, 'list'=>$list] );
    // }
}