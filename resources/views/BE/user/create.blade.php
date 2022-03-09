{{--@extends('BE.layout.main')--}}
{{--@section('content')--}}
{{--    <div class="content-wrapper">--}}

{{--        <!-- Content Header (Page header) -->--}}
{{--        <section class="content-header">--}}
{{--            <h1>--}}
{{--                Thêm thông tin USER <a href="{{route('admin.user.index')}}" class="btn bg-purple "><i class="fa fa-plus"></i> Danh sách USER</a>--}}

{{--            </h1>--}}
{{--            <ol class="breadcrumb">--}}
{{--                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
{{--                <li><a href="#">thêm thông tin USER</a></li>--}}

{{--            </ol>--}}
{{--        </section>--}}

{{--        <!-- Main content -->--}}
{{--        <section class="content">--}}
{{--            <div class="row">--}}

{{--                <div class="col-md-12">--}}
{{--                    <!-- general form elements -->--}}
{{--                    <div class="box box-primary">--}}
{{--                        <div class="box-header with-border">--}}
{{--                            <h3 class="box-title">Nhập thông tin USER</h3>--}}
{{--                        </div>--}}
{{--                        <!-- /.box-header -->--}}
{{--                        <!-- form start -->--}}

{{--                        <form role="form" action = "{{route('admin.user.store')}}" method = "post" enctype="multipart/form-data">--}}
{{--                            @csrf--}}
{{--                            <div class="box-body">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="exampleInputPassword1">Nhập tên</label>--}}
{{--                                        <input type="text" class="form-control" name ="name" id="name" placeholder="Nhập tên người dùng">--}}
{{--                                        @if($errors->has('name'))--}}
{{--                                            <label class="Text-red" style="font-size:15px;font-weight:600;margin-top:5px;color:red" >--}}
{{--                                                <i class="fa fa-info"></i>{{$errors->first('name')}}--}}
{{--                                            </label>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group">--}}
{{--                                        <label for="exampleInputEmail1">Nhập email</label>--}}
{{--                                        <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email">--}}
{{--                                        @if($errors->has('email'))--}}
{{--                                            <label class="Text-red" style="font-size:15px;font-weight:600;margin-top:5px;color:red" >--}}
{{--                                                <i class="fa fa-info"></i>{{$errors->first('email')}}--}}
{{--                                            </label>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hình ảnh</label>
                                        <input type="file" id="image" name="image" >
                                        <p class="help-block">Example block-level help text here.</p>
                                    </div>
{{--                                    <div class="checkbox">--}}
{{--                                        <label>--}}
{{--                                            <input type="checkbox" id="remember"> Check me out--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /.box-body -->--}}
{{--                                <div class="box-footer">--}}
{{--                                <button type="submit" class="btn btn-primary">Tạo</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <!-- /.box -->--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </section>--}}
{{--        <!-- /.content -->--}}
{{--    </div>--}}
{{--@endsection--}}
