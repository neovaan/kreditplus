<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 6/15/2017
 * Time: 11:23 AM
 */

namespace App\Http\Controllers\Site;

use Mail;
use Wa;
use App\Http\Controllers\Site\BaseController;
use DB;
use App\Mail\KryptoniteFound;
class ContactController extends BaseController
{
    public function actionPostIndex(){
      // Mail::to('meggi@webarq.co.id')->send(new KryptoniteFound());
    	 $data = array(
        'name' => $_POST['nama'],
    );
      unset($_POST['_token']);
      DB::table('testimoni')->insert($_POST);
    	Mail::send('test', $data, function ($message) {

        $message->from('meggi@webarq.co.id', 'Learning Laravel');

        $message->to('meggi@webarq.co.id')->subject('tes email');

   		 });
      echo json_encode(array('response'=>'ok'));
      die;
    }
}