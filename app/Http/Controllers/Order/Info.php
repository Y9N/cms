<?php
namespace App\Http\Controllers\order;
use App\Http\Controllers\Controller;
use App\Model\CmsShop;

class Info extends Controller
{
    public function first(){
        $data=CmsShop::all();
        $data=[
          'data'=>$data
        ];
        return view('info.list',$data);
        //dd($data);
    }
    public function add(){
        $data=[
            'name'=>'李香玉',
            'age'=>'99'
        ];
        //$res=CmsShop::insert($data);
        $addid=CmsShop::insertGetId($data);
        var_dump($addid);
    }
    public function update($id){
        $where=[
            'id'=>$id
        ];
        $data=[
            'name'=>'原朝'
        ];
        $res=CmsShop::where($where)->update($data);
        dump($res);
    }
    public function delete($id){
        $where=[
            'id'=>$id
        ];
        $res=CmsShop::where($where)->delete();
        dump($res);
    }
}