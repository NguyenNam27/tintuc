<?php

namespace App\Http\Controllers;

use App\Post;
use App\Subcategory;
use Illuminate\Http\Request;

class KienThucController extends Controller
{

    public function index(){

        return view('FE.body.test');
    }
    public function load_more(Request $request)
    {
        $arr = [];
        $noibat = Post::where([['highlights', '1'],['active', '1']])
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();
        foreach ($noibat as $noi){
            array_push($arr,$noi->id);
        }
        if ($request->ajax()){
            if ($request->id){
                $data = Post::where([['id','<',$request->id],['highlights','1'],['active','1']])
                        ->whereNotIn('id',$arr)
                        ->orderBy('id','desc')
                        ->limit(3)
                        ->get();
            } else{
                $data = Post::orderBy('id','desc')->limit(3)->get();
            }
        }
        return view('FE.body.getdata',['data'=>$data]);
    }
    public function load_kienthuc(Request $request)
    {
        if ($request->ajax()){
            if ($request->id){
                $kienthuc = Post::where([['id','<',$request->id],['active','1']])
                    ->orderBy('id','desc')
                    ->limit(4)
                    ->get();
            } else{
                $kienthuc = Post::orderBy('id','desc')->limit(4)->get();

            }
        }

        return view('FE.body.getkienthuc',[
           'kienthuc'=>$kienthuc,

        ]);
    }
    public function show_kienthuc($id){
        $kienthuc = Subcategory::where('active', '1')
            ->whereIn('id', [5, 6, 7])
            ->get();
        $tinhot = Post::where([['hot', '1' ],['active', '1']])
            ->orderBy('id', 'desc')
            ->get();

        $arr = [];
        $show_kt = Post::where([['subcategories_id',$id],['active','1']])
            ->orderBy('id','desc')
//            ->limit(4)
            ->get();
        foreach ( $show_kt as $show)
        {
            array_push($arr,$show->id);
        }

        return view('FE.body.loaikienthuc',[
            'show_kt'=>$show_kt,
            'kienthuc' => $kienthuc,
            'tinhot' => $tinhot
        ]);
    }
}
