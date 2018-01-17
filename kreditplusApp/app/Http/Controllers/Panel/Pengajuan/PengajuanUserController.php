<?php
/**
 * Created by PhpStorm.
 * User: DanielSimangunsong
 * Date: 6/15/2017
 * Time: 11:23 AM
 */

namespace App\Http\Controllers\Panel\Pengajuan;

use Illuminate\Http\Request;
use Webarq\Http\Controllers\Panel\BaseController;
use App\Webarq\Model\PengajuanUserModel;
class PengajuanUserController extends BaseController
{
    function actionGetView(){
    	$param = $this->getParam(1);
    	$data = PengajuanUserModel::whereId($param)->get();
    	$this->layout->rightSection = view('pengajuan',['data'=>$data]);
    }
}