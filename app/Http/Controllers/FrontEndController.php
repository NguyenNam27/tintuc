<?php

namespace App\Http\Controllers;

use App\Post;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function TrangChu()
    {
        $array = [];

        $new_posts = Post::where([['posittion', '1'], ['active', '1']])
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();

        foreach ($new_posts as $value) {
            array_push($array, $value->id);
        }

        $new = Post::where([['posittion', '1'], ['active', '1']])
            ->whereNotIn('id', $array)
            ->get();
        $highlights = Post::where([['highlights', '1'], ['active', '1']])
            ->orderBy('id', 'desc')
            ->get();

        $crypto = Post::where([['subcategories_id', '13'], ['active', '1']])
            ->orderBy('subcategories_id', 'desc')
            ->limit(4)
            ->get();
        $KT_crypto = Post::where([['subcategories_id', '8'], ['active', '1']])
            ->orderBy('subcategories_id', 'desc')
            ->limit(4)
            ->get();
        $KTNM = Post::where([['subcategories_id', '16'], ['active', '1']])
            ->orderBy('subcategories_id', 'desc')
            ->limit(4)
            ->get();
        $KTBL = Post::where([['subcategories_id', '9'], ['active', '1']])
            ->orderBy('subcategories_id', 'desc')
            ->limit(4)
            ->get();
        $group = Post::where([['subcategories_id', '14'], ['active', '1']])
            ->orderBy('subcategories_id', 'desc')
            ->limit(4)
            ->get();
        $LTC_arr = [];
        $LTC_TV = Post::where([['subcategories_id', '15'], ['active', '1']])
            ->orderBy('subcategories_id', 'desc')
            ->limit(1)
            ->get();
        foreach ($LTC_TV as $ltc) {
            array_push($LTC_arr, $ltc->id);

        }
        $LTCTV = Post::where([['subcategories_id', '15'], ['active', '1']])
            ->whereNotIn('id', $LTC_arr)
            ->get();
        return view('FE.body.trangchu', [
            'new_posts' => $new_posts,
            'new' => $new,
            'highlights' => $highlights,
            'crypto' => $crypto,
            'KT_crypto' => $KT_crypto,
            'KTNM' => $KTNM,
            'KTBL' => $KTBL,
            'group' => $group,
            'LTC_TV' => $LTC_TV,
            'LTCTV' => $LTCTV
        ]);
    }

    public function Ve_LTC()
    {
        return view('FE.body.ve_LTC');
    }

    public function TinTuc()
    {
        $tintuc = Subcategory::where('active', '1')
            ->whereIn('id', [1, 2, 3, 4])
            ->get();
        $new_arr = [];
        $new = Post::where('active', '1')
            ->orderBy('id', 'desc')
            ->limit(2)
            ->get();
        foreach ($new as $n) {
            array_push($new_arr, $n->id);
        }
//        dd($new);
        $KTBL = Post::where('active', '1')
            ->whereNotIn('id', $new_arr)
            ->get();
//        dd($KTBL);
        $tinhot = Post::where([['hot', '1'], ['active', '1']])
            ->orderBy('id', 'desc')
            ->get();


        return view('FE.body.tintuc', [
            'tintuc' => $tintuc,
            'new' => $new,
            'KTBL' => $KTBL,
            'tinhot' => $tinhot,
        ]);
    }

    public function show_subcategory($id)
    {
        $tintuc = Subcategory::where('active', '1')
            ->whereIn('id', [1, 2, 3, 4])
            ->get();
//        $new = Post::where('active', '1')
//            ->whereIn('id', [33, 34])
//            ->get();
        $tinhot = Post::where([['hot', '1'], ['active', '1']])
            ->orderBy('id', 'desc')
            ->get();
        $show_two_arr = [];
        $show_two = Post::where([['subcategories_id', $id], ['active', '1']])
            ->orderBy('id', 'ASC')
            ->limit(2)
            ->get();

        foreach ($show_two as $show) {
            array_push($show_two_arr, $show->id);
        }

        $bit = Post::where([['subcategories_id', $id], ['active', '1']])
            ->whereNotIn('id', $show_two_arr)
            ->orderBy('id', 'desc')
            ->get();
        return view('FE.body.bit', [
            'tintuc' => $tintuc,
//                'new' => $new,
            'bit' => $bit,
            'tinhot' => $tinhot,
            'show_two' => $show_two
        ]);
    }

    public function KienThuc()
    {
        $kienthuc = Subcategory::where('active', '1')
            ->whereIn('id', [5, 6, 7])
            ->get();
        $tinhot = Post::where([['hot', '1'], ['active', '1']])
            ->orderBy('id', 'desc')
            ->get();

        return view('FE.body.kienthuc', [
            'kienthuc' => $kienthuc,
            'tinhot' => $tinhot,
        ]);
    }

    public function NoiBat()
    {

        $arr = [];
        $noibat = Post::where([['highlights', '1'], ['active', '1']])
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();
        foreach ($noibat as $noi) {
            array_push($arr, $noi->id);
        }
        $noibat2 = Post::where([['highlights', '1'], ['active', '1']])
            ->whereNotIn('id', $arr)
            ->get();

        return view('FE.body.noibat', [
            'noibat' => $noibat,
            'noibat2' => $noibat2
        ]);
    }

    public function OTC()
    {
        return view('FE.body.OTC');
    }

    public function ChiTiet($id)
    {

        $chitiet = Post::find($id);
        $relate = Post::where('subcategories_id', $chitiet->subcategories_id)
            ->whereNotIn('id', [$id])
            ->get();

        $tinhot = Post::where([['hot', '1'], ['active', '1']])
            ->orderBy('id', 'desc')
            ->get();

        return view('FE.body.chitiet', [
            'chitiet' => $chitiet,
            'tinhot' => $tinhot,
            'replate' => $relate

        ]);
    }

    public function timkiem()
    {
        $keywords = $_GET['key_words'];
        $seach = Post::with('subcategory')
            ->where('title', 'like', '%' . $keywords . '%')
            ->orwhere('description', 'like', '%' . $keywords . '%')
            ->orwhere('content', 'like', '%' . $keywords . '%')
            ->get();
        dd($seach);
        return view('FE.body.timkiem', [
            'seach'=>$seach
        ]);

    }


}
