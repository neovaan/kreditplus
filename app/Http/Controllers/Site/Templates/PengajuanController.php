<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 6/15/2017
 * Time: 11:23 AM
 */

namespace App\Http\Controllers\Site\Templates;


use Wa;
use DB;
use Illuminate\Http\Request;
use App\Webarq\Model\ProdukModel;
use App\Webarq\Model\AreaModel;
use App\Webarq\Model\BrandModel;
use App\Webarq\Model\PengajuanUserModel;
use App\Http\Controllers\Site\BaseController;

class PengajuanController extends BaseController
{
    function actionAjaxPostSet(Request $req){
    	$produk_id = $req->input('val');
        $data = BrandModel::where('produk_id','=',$produk_id)->get();
		$html="";
    	if($data->count()){
    		foreach($data as $key){
    			$html.="<option value='".$key->id."'>".$key->title."</option>";
    		}
    	}
    	echo $html; die;
    }

    function actionAjaxPostForm(Request $req){
    	$secretKey="6LeD3DYUAAAAAJvpFG_zKDzu_GGj3DrBSJEv1ifS";
    	$captcha= $_POST["g-recaptcha-response"];
		$respond=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
		$hasil=json_decode($respond,true);
		if($hasil['success']){
			$insert =DB::table('pengajuan_user')->insert($req->except(['_token','g-recaptcha-response']));
			if($insert){
				echo json_encode(array('response'=>'ok'));
			}else{
				echo json_encode(array('response'=>'err'));
			}
		}else{
			echo json_encode(array('response'=>'error'));
		}
		die;
    }

    function actionGetIndex(){
    	 	$data = ProdukModel::limit(4)->get();
            $area = AreaModel::get();
            view()->share(['produk'=>$data,'area'=>$area]);
    		parent::actionGetIndex();
    }
}