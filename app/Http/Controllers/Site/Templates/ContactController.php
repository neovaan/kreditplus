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
use DB;
use Mail;
use Wa;
class ContactController extends BaseController
{
    public function actionPostIndex(Request $req){
    	 $data = array(
        'name' =>$req->input('nama'),
    );
      unset($_POST['_token']);
      DB::table('testimoni')->insert($_POST);
    	Mail::send('test', $data, function ($message) use($req) {
        $message->from('meggi@webarq.co.id', 'Kreditplus');
        $message->to($req->input('email'))->subject('tes email');
   		 });
      echo json_encode(array('response'=>'ok'));
      die;
    }
}