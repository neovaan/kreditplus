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
use App\Webarq\Model\BannerModel;
use App\Webarq\Model\TypeModel;
use Illuminate\Http\Request;
use Wa;
use DB;
class InformasiController extends BaseController
{
    public function actionGetRead($id){
        $data = InformasiModel::selectTranslate('title','intro','description','permalink')->addSelect('image','type')->whereTranslate('permalink',$id)->get();
        $list = new InformasiModel;
        if(count($data)){
            $list = $list->whereTranslate('permalink','!=',$data[0]->permalink)->limit(2)->where('type','=',$data[0]->type)->get();
        }else{
            $list = $list->limit(2)->get();
        }
        $metaDescription = $data->count() ? $data[0]->description : 'Not Found';
        $footer = FooterModel::selectTranslate('txt1','txt2')->addSelect('image','link')->get();
        $link = Wa::menu()->getActive(true);
        $node = Wa::menu()->getNode($link[0])->permalink;
        $banner = BannerModel::select('path','image_small','image_medium')->where('section_id','like',$link[0].'%')->get();
        $view = "vendor.webarq.themes.front-end.layout.detail_informasi";
        return view($view, ['metaTitle'=>$id,'data' => $data, 'link'=>$node,'banner'=>$banner , 'list'=>$list,'footer'=>$footer,'metaDescription'=>$metaDescription] );
    }

    public function actionGetQ($id){
        $data = InformasiModel::selectTranslate('title','intro','permalink')->where('informasi.description','like','%'.$id.'%')
                ->orWhere('informasi.title','like','%'.$id.'%')
                ->orWhere('informasi.intro','like','%'.$id.'%')
                ->get();
        $metaDescription = $data->count() ? $data[0]->description : 'Not Found';
        $footer = FooterModel::selectTranslate('txt1','txt2')->addSelect('image','link')->get();
        $view = "vendor.webarq.themes.front-end.layout.search";
        $link = Wa::menu()->getActive(true);
        $node = Wa::menu()->getNode($link[0])->permalink;
        $banner = BannerModel::select('path','image_small','image_medium')->where('section_id','like',$link[0].'%')->get();
        return view($view, ['metaTitle'=>$id,'data' => $data, 'link'=>$node, 'banner'=>$banner ,'footer'=>$footer,'metaDescription'=> $metaDescription] );
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

    public function actionGetIndex(){
        $type = TypeModel::select('title')->get();
        view()->share(['type'=>$type]);
        parent::actionGetIndex();
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