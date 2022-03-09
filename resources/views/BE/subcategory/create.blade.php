@extends('BE.layout.main')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm thông tin loại tin <a href="{{route('admin.subcategory.index')}}" class="btn bg-purple "><i class="fa fa-plus"></i> Danh sách loại tin</a>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Thêm loại tin</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nhập thông tin loại tin</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" action = "{{route('admin.subcategory.store')}}" method = "post" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nhập tên loại tin</label>
                                        <input type="text" class="form-control" name ="name" id="name" placeholder="Nhập tên loại tin">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Danh mục</label>
                                        <select class="form-control" name="categories_id">
                                            <option value="select">--Chọn danh mục--</option>
                                            @foreach($category as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hoạt động</label>
                                        <input type="number" class="form-control" name="active" id="active" placeholder="" min="0" max="1">

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
                                <button type="submit" class="btn btn-primary">Tạo</button>
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
