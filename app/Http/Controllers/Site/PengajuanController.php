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
use Request;
class PengajuanController extends BaseController
{
    function actionAjaxPostSet(Request $req){
    	$produk_id = $_POST['val'];
    	$data = DB::select("SELECT id,title FROM brand WHERE produk_id='".$produk_id."' ");
    	$data = json_decode(json_encode($data),true);
		$html="";
    	if(count($data)){
    		foreach($data as $key){
    			$html.="<option value='".$key['id']."'>".$key['title']."</option>";
    		}
    	}
    	echo $html; die;
    }

    function actionAjaxPostForm(){
    	$secretKey="6LeNHTYUAAAAALMonbzuTNmj8LivVMmCg4HsAbY_";
    	$captcha= $_POST["g-recaptcha-response"];
		$respond=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
		$hasil=json_decode($respond,true);
		if($hasil['success']){
			unset($_POST['g-recaptcha-response']);
			unset($_POST['_token']);
			$insert = DB::table('pengajuan_user')->insert($_POST);
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
}