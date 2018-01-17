<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webarq\Model\NewsletterModel as News;

class Newsletter extends Controller
{
    function setMail(Request $req){
    	$email = $req->input('data');
    	$cek = News::where('email','=',$email)->get();
    	if(!$cek->count()){
	    	$news = new News;
	    	$news->email = $email;
	    	$news->save();
	    	echo json_encode(array('response'=>'ok','msg'=>'Proses Berhasil'));
	    }else{
	    	echo json_encode(array('response'=>'err','msg'=>'Email Sudah Terdaftar'));
	    }
    }
}
