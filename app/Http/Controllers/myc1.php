<?php

namespace App\Http\Controllers;

use App\Models\mym1;
use Illuminate\Http\Request;

use App\Models\mym1s;

class myc1 extends Controller
{
    //

    function ins(Request $ri){
        $p1 = $ri ->get("name");
        $p2 = $ri ->get("img");
        $p2=$ri->file("img")->getClientOriginalName();
        $ri->img->move(public_path('photos'),$p2);    
        $p3 = $ri ->get("price");
        $p4 = $ri ->get("cate");
    
    $sql = new mym1();
    $sql->productname=$p1;
    $sql->productimage=$p2;
    $sql->productprice=$p3;
    $sql->category=$p4;

    $sql->save();
    return redirect('ins');

    }

function show(){
    $sql = mym1::all();
    return view('show',['r'=>$sql]);
}

function dell($id){
    $sql = mym1::find($id);
    $sql->delete();
    return redirect('s');
}

function upshow($id){
    $sql = mym1::find($id);
    return view('update',['s'=>$sql]);
}

function update(Request $req){
    $sql = mym1::find($req->id);
    $sql->productname=$req->name;
    $img=$req->file("img")->getClientOriginalName();
    $req->img->move(public_path('photos'),$img);
    $sql->productimage=$req->img->getClientOriginalName();
    $sql->productprice=$req->price;
    $sql->category=$req->cate;

    $sql->save();
    return redirect('s');
}


function webshow(){
    $sql = mym1::query()->where('category','Sunscreens')->get();
    $sql1 = mym1::query()->where('category','bundels')->get();
    $sql2 = mym1::query()->where('category','body lotion')->get();
    $sql3 = mym1::query()->where('category','Moisturizer')->get();
    $sql4 = mym1::all();
    return view('index',compact('sql','sql1','sql2','sql3','sql4'));

}

function cart($id){
    $sql = mym1::find($id);
    return view('shop',['s'=>$sql]);
}

function cart1($id){
    $sql = mym1::find($id);
    return view('shop1',['s'=>$sql]);
} 

function search(Request $req){
$search=$req->get('sea');

$sql=mym1::query()->where('productname','LIKE',"%{$search}%")->get();
$sql1=mym1::query()->where('productname','LIKE',"%{$search}%")->get();
$sql2=mym1::query()->where('productname','LIKE',"%{$search}%")->get();
$sql3=mym1::query()->where('productname','LIKE',"%{$search}%")->get();
$sql4=mym1::query()->where('productname','LIKE',"%{$search}%")->get();
return view('index',compact('sql','sql1','sql2','sql3','sql4'));

}

}
