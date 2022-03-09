<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('BE.category.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BE.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'name'=>'require|max:255',
//
//            ],[
//            'name.require'=>'vui lòng nhập tên danh mục'
//        ]);
//        $validator = Validator::make(array([)]),
//
//                                         [
//            'name' => 'required|unique:posts|max:255',
//
//        ]);

//        if ($validator->fails()) {
//            return redirect('BE.category.create')
//                ->withErrors($validator)
//                ->withInput();
//        }
        $name = $request->input('name');
        $slug = $request->input('slug');
        $active = $request->input('active');

        $category = new Category();
        $category->name = $name;
        $category->slug = $slug;
        $category->active = $active;

        $category->save();

        session()->flash('success','Tạo thành công.');

        return redirect()->route('admin.category.index');


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
        $edit =Category:: find($id);
        return view('BE.category.edit',[
            'edit'=>$edit
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
        $name = $request->input('name');
        $slug = $request->input('slug');
        $active = $request->input('active');

        $category =Category::find($id);
        $category->name = $name;
        $category->slug = $slug;
        $category->active = $active;

        $category->save();

        session()->flash('success','Cập nhập thành công.');

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Category::destroy($id);

        if ($isDelete) {
            return response()->json(['success' => 1,'message'=>'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message'=>'Thất bại']);
        }
    }
}
