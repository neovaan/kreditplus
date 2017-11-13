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
Route::get('q','SearchController@index');
// Route::post('image',['as' => 'upload',function(){
//  dd($_FILES)

// }]);
Route::post('imagex', function(){
        if(count($_FILES)){
            echo $_SERVER['DOCUMENT_ROOT'].'/kreditplus-be/public/ck/';
            // if(!is_dir('/ck/'))
            //  mkdir('/ck/');
            $d = date('YmdHis');
            $basename = basename($_SERVER['DOCUMENT_ROOT']."public/ck/".md5($d)."_".$_FILES['upload']['name']);
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

