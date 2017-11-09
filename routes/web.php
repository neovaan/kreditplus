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
// 	dd($_FILES)

// }]);
Route::post('imagex', function(){
    	if(count($_FILES)){
            print_r($_SERVER);die;
            echo URL::asset('/').'public/ck/';
    		if(!is_dir($_SERVER['DOCUMENT_ROOT'].'public/ck/'))
    			mkdir(URL::asset('/').'public/ck/');
    		$d = date('YmdHis');
    		chmod(URL::to('/').'public/ck/', 0777);
    		$basename = basename($_SERVER['DOCUMENT_ROOT']."public/ck/".md5($d)."_".$_FILES['upload']['name']);
    		move_uploaded_file($_FILES['upload']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."public/ck/".md5($d)."_".$_FILES['upload']['name']);
    		$funcNum = $_GET['CKEditorFuncNum'] ;
    		$message = "";
    		$u = URL::asset('ck/'.md5($d).'_'.$_FILES['upload']['name']);
    		echo '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction("'.$funcNum.'", "'.$u.'", "'.$message.'");</script>';
    		
    	}
    }
);
Route::post('newsletter', 'Newsletter@setMail');
