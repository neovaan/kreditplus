<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KotaModel;
use App\Webarq\Model\CabangModel;

class KotaController extends Controller
{
    function getKota(Request $req){
    	$id = $req->input('id');
    	$kota = KotaModel::where('province_id',$id)->get();
    	if($kota->count()){
    		$html="";
    		foreach($kota as $q){
    			$html.="<option value='".$q->name."'>".$q->name."</option>";
    		}
    		echo $html;
    	}
    }
    function setKota(Request $req){
    	$id = $req->input('id');
    	$data = CabangModel::where('id',$id)->get();
    	if($data->count()){
    		echo $data[0]->kota;
    	}
    }
}
