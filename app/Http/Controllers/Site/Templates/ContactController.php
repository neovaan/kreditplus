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
use App\Webarq\Model\CabangModel;
use App\Webarq\Model\MapCabangModel;
use DB;
use Mail;
use Wa;
class ContactController extends BaseController
{

    function actionGetIndex(){
        $cabang = MapCabangModel::select('lat','long','title_name','contact_name')->get();
        view()->share(['map'=>$cabang]);
        parent::actionGetIndex();
    }

    public function actionAjaxPostSet(Request $req){
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

    // public function actionPostSet(Request $req){
    //    $data = array(
    //     'name' =>$req->input('nama'),
    //    );
    //   unset($_POST['_token']);
    //   DB::table('testimoni')->insert($_POST);
    //   Mail::send('test', $data, function ($message) use($req) {
    //     $message->from('meggi@webarq.co.id', 'Kreditplus');
    //     $message->to($req->input('email'))->subject('tes email');
    //    });
    //   echo json_encode(array('response'=>'ok'));
    //   die;
    // }

    public function actionAjaxPostXy(Request $req){
      $data = $req->input('val');
      if($data == "jabodetabek"){
          $q = CabangModel::select('kota','alamat','fax','email','telp')
               ->leftjoin('provinces','provinces.id','=','cabang.provinsi')
               ->where('kota','like','%jakarta%')
               ->orWhere('kota','like','%bogor%')
               ->orWhere('kota','like','%depok%')
               ->orWhere('kota','like','%tanggerang%')
               ->orWhere('kota','like','%bekasi%')
               ->orWhere('cabang.provinsi','=','13')
               ->orWhere('cabang.provinsi','=','32')
               ->get();
      }else if($data == "indo"){
          $q = CabangModel::select('kota','alamat','fax','email','telp','id')->get();
      }else{
          $q = CabangModel::select('kota','alamat','fax','email','telp','id')->where('provinsi',$data)->get();
      }
      if($q->count()){
        echo json_encode(array('response'=>'ok','val'=>$q));
      }else{
        echo json_encode(array('response'=>'error'));
      }
      die;
    }

    public function actionPostXy(Request $req){
      $data = $req->input('val');
      if($data == "jabodetabek"){
          $q = CabangModel::select('kota','alamat','fax','email','telp')->where('kota','like','%jakarta%')
               ->orWhere('kota','like','%bogor%')
               ->orWhere('kota','like','%depok%')
               ->orWhere('kota','like','%tanggerang%')
               ->orWhere('kota','like','%bekasi%')
               ->get();
      }else if($data == "indo"){
          $q = CabangModel::select('kota','alamat','fax','email','telp')->get();
      }
      if($q->count()){
        echo json_encode(array('response'=>'ok','val'=>$q));
      }else{
        echo json_encode(array('response'=>'error'));
      }
      die;
    }
}