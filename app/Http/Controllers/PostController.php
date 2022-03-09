<?php

namespace App\Http\Controllers;

use App\Post;
use App\Subcategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::all();
        $data = Post::latest()->paginate(8);
        return view('BE.post.index',[
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
        $subcategory = Subcategory::all();
//        dd($subcategory);
        return view('BE.post.create',[
            'subcate'=> $subcategory
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
//        dd($request->all());
        $request->validate([
            'title'=>'required|max:255|unique:posts',
            'subcategories_id'=>'required',
            'hot'=>'required|not_in:0',
            'new_posts'=>'required|not_in:0',
            'highlights'=>'required|not_in:0',
            'description'=>'required',
            'content'=>'required',
            'image'=>'required|image|mines:jpg,png,gif,svg|max: 10000',
            'key_words'=>'required|max:40',
            'active'=>'required|not_in:0',
            'posittion'=>'required|not_in:0'

            ],[
            'title.required'=>'bạn cần nhập tiêu đề',
            'title.unique'=>'tiêu đề đã được sử dụng',
            'subcategories_id.required'=>'bạn cần chọn danh mục bài viết',
            'hot.required'=>'bạn cần chọn tin',
            'new_posts.required'=>'bạn cần chọn tin',
            'highlights.required'=>'bạn cần chọn tin',
            'description.required'=>'bạn cần nhập mô tả',
            'content.required'=>'bạn cần nhập nội dung',
            'image.required'=>'bạn cần chọn hình ảnh cho bài viết',
            'image.image'=>'file cần có dạng jpg,png,gif,svg',
            'key_words.required'=>'bạn cần nhập từ khoá tìm kiếm cho bài viết',
            'posittion.required'=>'bạn cần chọn vị trí'
        ]);
        $title = $request->input('title');
        $subcategories_id = $request->input('subcategories_id');
        $hot = $request->input('hot');
        $highlights = $request->input('highlights');
        $new_posts = $request->input('new_posts');
        $key_words = $request->input('key_words');
        $description = $request->input('description');
        $content = $request->input('content');
        $active = $request->input('active');
        $posittion = $request->input('posittion');


        $path_avatar = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'uploads/post/';
            // upload file
            $file->move($path_upload, $filename);
            $path_avatar = $path_upload.$filename;

            $post = new Post();
            $post ->title = $title;
            $post->subcategories_id = $subcategories_id;
            $post->hot = $hot;
            $post->highlights = $highlights;
            $post->new_posts = $new_posts;
            $post->key_words = $key_words;
            $post->description = $description;
            $post->content =$content;
            $post->active = $active;
            $post->image = $path_avatar;
            $post->posittion = $posittion;

            $post->save();
            session()->flash('success','Tạo bài viết thành công');
            return redirect()->route('admin.post.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editPost = Post::find($id);
        $subcategory = Subcategory::all();
        return view('BE.post.edit',[
            'editPost'=>$editPost,
            'subcate'=> $subcategory
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
//        dd($request->all());
        $request->validate([
//            'title'=>'required|max:255|unique:posts',
//            'subcategories_id'=>'required',
//            'hot'=>'required|not_in:0',
//            'new_posts'=>'required|not_in:0',
//            'highlights'=>'required|not_in:0',
//            'description'=>'required',
//            'content'=>'required',
//            'image'=>'required|image|mines:jpg,png,gif,svg|max: 10000',
//            'key_words'=>'required|max:40',
//            'active'=>'required|not_in:0',
//            'posittion'=>'required|not_in:0'

        ],[
//            'title.required'=>'bạn cần nhập tiêu đề',
//            'title.unique'=>'tiêu đề đã được sử dụng',
//            'subcategories_id.required'=>'bạn cần chọn danh mục bài viết',
//            'hot.required'=>'bạn cần chọn tin',
//            'new_posts.required'=>'bạn cần chọn tin',
//            'highlights.required'=>'bạn cần chọn tin',
//            'description.required'=>'bạn cần nhập mô tả',
//            'content.required'=>'bạn cần nhập nội dung',
//            'image.required'=>'bạn cần chọn hình ảnh mới cho bài viết',
//            'image.image'=>'file cần có dạng jpg,png,gif,svg',
//            'key_words.required'=>'bạn cần nhập từ khoá tìm kiếm cho bài viết',
//            'posittion.required'=>'bạn cần chọn vị trí'
        ]);
        $title = $request->input('title');
        $subcategories_id = $request->input('subcategories_id');
        $hot = $request->input('hot');
        $highlights = $request->input('highlights');
        $new_posts = $request->input('new_posts');
        $key_words = $request->input('key_words');
        $description = $request->input('description');
        $content = $request->input('content');
        $active = $request->input('active');
        $posittion = $request->input('posittion');

        $path_avatar = '';
        if ($request->hasFile('image')) {
            // get file
            $file = $request->file('image');
            // get ten
            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
            // duong dan upload
            $path_upload = 'uploads/post/';
            // upload file
            $file->move($path_upload, $filename);
            $path_avatar = $path_upload.$filename;

            $post = Post::find($id);
            $post ->title = $title;
            $post->subcategories_id = $subcategories_id;
            $post->hot = $hot;
            $post->highlights = $highlights;
            $post->new_posts = $new_posts;
            $post->key_words = $key_words;
            $post->description = $description;
            $post->content = $content;
            $post->active = $active;
            $post->image = $path_avatar;
            $post->posittion = $posittion;

            $post->save();

            session()->flash('success','Cập nhập viết thành công');

            return redirect()->route('admin.post.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Post::destroy($id);

        if ($isDelete) {
            return response()->json(['success' => 1,'message'=>'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message'=>'Thất bại']);
        }
    }
}
