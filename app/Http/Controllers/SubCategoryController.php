<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub = Subcategory::all();
        $item = Subcategory::latest()->paginate(5);
        return view('BE.subcategory.index',[
            'sub'=>$item
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('BE.subcategory.create',[
            'category'=>$category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([


           ],[

        ]);
        $name=$request->input('name');
        $categories_id= $request->input('categories_id');
        $active = $request->input('active');

        $subcategory = new Subcategory();
        $subcategory->name = $name;
        $subcategory->categories_id=$categories_id;
        $subcategory->active=$active;
        $subcategory->save();
        session()->flash('success','Tạo danh mục thành công');
        return redirect()->route('admin.subcategory.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $edit = Subcategory::find($id);
        return view('BE.subcategory.edit',[
            'edit'=>$edit,
            'category'=>$category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([


        ],[

        ]);
        $name=$request->input('name');
        $categories_id= $request->input('categories_id');
        $active = $request->input('active');

        $subcategory = Subcategory::find($id);
        $subcategory->name = $name;
        $subcategory->categories_id=$categories_id;
        $subcategory->active=$active;
        $subcategory->save();
        session()->flash('success','Cập nhập loại tin thành công');
        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Subcategory::destroy($id);

        if ($isDelete) {
            return response()->json(['success' => 1,'message'=>'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message'=>'Thất bại']);
        }
    }
}
