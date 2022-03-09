@extends('BE.layout.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Cập thông tin danh mục <a href="{{route('admin.category.index')}}" class="btn bg-purple "><i class="fa fa-plus"></i> Danh sách danh mục</a>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Cập nhập thông tin danh mục</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Cập nhập thông tin danh mục</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" action = "{{route('admin.category.update',['edit'=>$edit->id])}}" method = "post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nhập tên danh mục mới</label>
                                        <input value="{{$edit->name}}" type="text" class="form-control" name ="name" id="name" placeholder="Nhập tên danh mục">
                                        @if($errors->has('name'))
                                            <label class="Text-red" style="font-size:15px;font-weight:600;margin-top:5px;color:red" >
                                                <i class="fa fa-info"></i>{{$errors->first('name')}}
                                            </label>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Slug</label>
                                        <input value="{{$edit->slug}}" type="text" class="form-control" name="slug" id="slug" placeholder="nhập slug">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hoạt động</label>
                                        <input value="{{$edit->active}}" type="number" class="form-control" name="active" id="active" min="0" max="1">

                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="remember"> Check me out
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Cập nhập</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
