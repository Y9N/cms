<?php
namespace App\Http\Controllers\order;
use App\Http\Controllers\Controller;
use App\Model\CmsShop;

class Info extends Controller
{
    public function info($id){
        $data=CmsShop::where(['id'=>$id])->first()->toArray();
        dd($data);
    }
}