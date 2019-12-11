<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Goods;
class GoodsController extends Controller
{
    public function add(Request $request)
    {
        dd(1111);
        $data=$request->all();
        dd($data);
        $res=Goods::insert($data);
        if($res){
            echo "1";
        }else{
            echo "2";
        }
    }
}
