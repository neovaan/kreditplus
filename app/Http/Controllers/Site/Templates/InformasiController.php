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
use App\Webarq\Model\ProdukModel;
use App\Webarq\Model\KarirModel;
use App\Webarq\Model\ContentModel;
use App\Webarq\Model\LayananModel;
use App\Webarq\Model\ContentKarirModel;
use App\Webarq\Model\FooterModel;
use App\Webarq\Model\BannerModel;
use App\Webarq\Model\VisimisiModel;
use App\Webarq\Model\PrestasiModel;
use App\Webarq\Model\TypeModel;
use Illuminate\Http\Request;
use Wa;
use DB;
class InformasiController extends BaseController
{
    public function actionGetRead($id){

        $data = InformasiModel::selectTranslate('title','intro','description','permalink')->addSelect('image','type')->whereTranslate('permalink',$id)->get();
        $list = InformasiModel::selectTranslate('title','intro','description','permalink')->addSelect('image2 as image','type');
        if(count($data)){
            $list = $list->whereTranslate('permalink','!=',$data[0]->permalink)->limit(2)->where('type','=',$data[0]->type)->get();
        }else{
            $list = $list->limit(2)->get();
        }
        $metaDescription = $data->count() ? $data[0]->description : 'Not Found';
        $footer = FooterModel::selectTranslate('txt1','txt2')->addSelect('image','link')->get();
        $link = Wa::menu()->getActive(true);
        $node = Wa::menu()->getNode($link[0])->getChild('first');
        if(!$node){
            $node = Wa::menu()->getNode($link[0]);
        }
        $meta = $data->count() ? $data[0]->title : 'Not Found';
        $banner = BannerModel::select('path','image_small','image_medium')->where('section_id','like',$node->id.'%')->get();
        $view = "vendor.webarq.themes.front-end.layout.detail_informasi";
        return view($view, ['metaTitle'=>$meta,'data' => $data, 'link'=>$node->permalink,'banner'=>$banner , 'list'=>$list,'footer'=>$footer,'metaDescription'=>$metaDescription] );
    }

    public function actionGetQ($id){
        // $data = InformasiModel::selectTranslate('title','intro','permalink','description')
        //         ->whereTranslate('description','like','%'.$id.'%')
        //         ->get();
        $informasi = InformasiModel::selectTranslate('title','intro','permalink','description')
                     ->where('informasi.description','like','%'.$id.'%')
                     ->orWhere('informasi.title','like','%'.$id.'%')
                     ->orWhere('informasi.intro','like','%'.$id.'%')
                     ->get();
         $produk = ProdukModel::selectTranslate('title','intro')->addSelect('link')
                     ->where('produk.title','like','%'.$id.'%')
                     ->orWhere('produk.intro','like','%'.$id.'%')
                     ->get();

         $karir = KarirModel::selectTranslate('description')->addSelect('title_job')
                     ->where('karir.title_job','like','%'.$id.'%')
                     ->orWhere('karir.description','like','%'.$id.'%')
                     ->get();
         $content = ContentModel::selectTranslate('description','title','intro')->addSelect('section_id')
                     ->where('content.title','like','%'.$id.'%')
                     ->orWhere('content.description','like','%'.$id.'%')
                     ->orWhere('content.intro','like','%'.$id.'%')
                     ->get();
        $content_karir = ContentKarirModel::selectTranslate('description','title','intro')->addSelect('section_id')
                     ->where('content_karir.title','like','%'.$id.'%')
                     ->orWhere('content_karir.description','like','%'.$id.'%')
                     ->orWhere('content_karir.intro','like','%'.$id.'%')
                     ->get();

        $layanan =   LayananModel::selectTranslate('title','intro')
                     ->where('layanan.title','like','%'.$id.'%')
                     ->orWhere('layanan.description','like','%'.$id.'%')
                     ->orWhere('layanan.intro','like','%'.$id.'%')
                     ->get();

        $visimisi =   VisimisiModel::selectTranslate('visi','misi','nilai','title')->addSelect('section_id')
                     ->where('visimisi.title','like','%'.$id.'%')
                     ->orWhere('visimisi.nilai','like','%'.$id.'%')
                     ->orWhere('visimisi.visi','like','%'.$id.'%')
                     ->orWhere('visimisi.misi','like','%'.$id.'%')
                     ->get();

        $prestasi =   PrestasiModel::selectTranslate('intro','title')->addSelect('section_id')
                     ->whereTranslate('prestasi.title','like','%'.$id.'%','or')
                     ->orWhere('prestasi.title','like','%'.$id.'%')
                     ->orWhere('prestasi.intro','like','%'.$id.'%')
                     ->orWhereTranslate('prestasi.intro','like','%'.$id.'%')
                     //dd($prestasi->toSql());
                     ->get();

        $footer = FooterModel::selectTranslate('txt1','txt2')->addSelect('image','link')->get();
        $view = "vendor.webarq.themes.front-end.layout.search";
        $link = Wa::menu()->getActive(true);
        $node = Wa::menu()->getNode($link[0])->getChild('first');
        if(!$node){
            $node = Wa::menu()->getNode($link[0]);
        }
        $banner = BannerModel::select('path','image_small','image_medium')->where('section_id','like',$node->id.'%')->get();
        return view($view, ['visimisi'=>$visimisi,'prestasi'=>$prestasi,'metaTitle'=>$id,'layanan'=>$layanan,'informasi' => $informasi, 'produk' => $produk, 'karir' => $karir, 'content' => $content, 'content_karir' => $content_karir, 'link'=>$node->permalink, 'banner'=>$banner ,'footer'=>$footer,'metaDescription'=> $id] );
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