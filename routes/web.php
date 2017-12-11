<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', 'About@index');
use App\Http\Controllers\Site\Templates\PengajuanController as pengajuan;
Route::get('q','SearchController@index');
// Route::post('image',['as' => 'upload',function(){
//  dd($_FILES)

// }]);
Route::post('imagex', function(){
        if(count($_FILES)){
           
            $d = date('YmdHis');
            $basename = basename($_SERVER['DOCUMENT_ROOT']."ck/".md5($d)."_".$_FILES['upload']['name']);
            move_uploaded_file($_FILES['upload']['tmp_name'],"/home/dev/apps/kreditplus-be/public/ck/".md5($d)."_".$_FILES['upload']['name']);
            $funcNum = $_GET['CKEditorFuncNum'] ;
            $message = "";
            $u = URL::asset('ck/'.md5($d).'_'.$_FILES['upload']['name']);
            echo '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction("'.$funcNum.'", "'.$u.'", "'.$message.'");</script>';
            
        }
    }
);
Route::post('newsletter', 'Newsletter@setMail');
Route::post('kota', 'KotaController@getKota');
Route::post('setkota', 'KotaController@setKota');
Route::post('setBrand', function(){
    $pengajuan = new pengajuan;
    $pengajuan->actionPostAjaxSet();
});
Route::post('contact',function(){
     $data = array(
        'name' =>$_POST['nama'],
    );
      unset($_POST['_token']);
      DB::table('testimoni')->insert($_POST);
        Mail::send('test', $data, function ($message) use($data) {
        $message->from('meggi@webarq.co.id', 'Kreditplus');
        $message->to($_POST['email'])->subject('tes email');
         });
      echo json_encode(array('response'=>'ok'));
      die;
});
