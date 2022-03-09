<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

use App\User;
use Session;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();

        $data2 = User::latest()->paginate(2);
        return view('BE.user.index',[
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
        return view('BE.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//                $validator = Validator::make($request->all(),[
//                    'name'=>'required|max:255',
//                    'email'=>'required|email',
//                    'password'=>'required|min:6',
//                    'phone'=>'required',
//                    ],[
//                    'name.required' => 'bạn cần nhập họ tên',
//                    'email.email' => 'Email không được định dạng đúng',
//                    'password.required' =>'Vui lòng nhập mật khẩu',
//                    'password.min' =>'mật khẩu phải có 6 ký tự',
//                ]);
//                if($validator->fails()){
//                    return redirect()->back()->withErrors($validator);
//                }
//        $admin_name = $request->input('name');
//        $admin_email = $request->input('email');
//
//
//        $path_avatar = '';
//        if ($request->hasFile('image')) {
//            // get file
//            $file = $request->file('image');
//            // get ten
//            $filename = $file->getClientOriginalName(); // lấy tên gốc của ảnh
//            // duong dan upload
//            $path_upload = 'uploads/user/';
//            // upload file
//            $file->move($path_upload,$filename);
//            $path_avatar = $path_upload.$filename;
//        }
//
////        dd($path_avatar);
//        $user = new User();
//        $user->name = $admin_name;
//        $user->email = $admin_email;
//        $user->image = $path_avatar;
//        $user->save();
//
//        session()->flash('success','Tạo thành công.');
//
//        return redirect()->route('admin.user.index')->with('thêm thành công');



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
//        $edit = User::find($id);
//        return view('BE.user.edit',['edit' => $edit]);
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
        $admin_name = $request->input('name');
        $admin_email = $request->input('email');
        $path_avatar = '';
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $filename = $file->getClientOriginalName();

            $path_upload = 'uploads/user/';

            $file->move($path_upload,$filename);
            $path_avatar = $path_upload.$filename;
        }
        $user = User::find($id);
        $user->email = $admin_email;
        $user->name = $admin_name;
        $user->name = $path_avatar;
        $user->save();
        session()->flash('success','Cập nhập thành công');

        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = User::destroy($id);

        if ($isDelete) {
            return response()->json(['success' => 1,'message'=>'Thành công']);
        } else {
            return response()->json(['success' => 0, 'message'=>'Thất bại']);
        }

    }
}
