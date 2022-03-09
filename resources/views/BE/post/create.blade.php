@extends('BE.layout.main')
@section('content')

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Thêm thông tin bài viết <a href="{{route('admin.post.index')}}" class="btn bg-purple "><i
                        class="fa fa-plus"></i> Danh sách bài viết</a>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> danh sách</a></li>
                <li><a href="#">thêm thông tin bài viết</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nhập thông tin bài viết</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" action="{{route('admin.post.store')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nhập tiêu đề bài viết</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                               placeholder="nhập tiêu đề">
                                        @if($errors->has('title'))
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('title')}}
                                            </label>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hình ảnh</label>
                                        <input type="file" id="image" name="image">
                                        <p class="help-block">Example block-level help text here.</p>
                                        @if($errors->has('image'))
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('image')}}
                                            </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> Loại tin </label>
                                        <select class="form-control" name="subcategories_id">
                                            <option value="">--Chọn loại tin--</option>
                                            @foreach($subcate as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach

                                        </select>
                                        @if($errors->has('subcategories_id'))
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('subcategories_id')}}
                                            </label>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Tin hot </label>
                                        <select class="form-control" name="hot">
                                            <option value="">--Chọn--</option>
                                            <option value="1">Tin hot</option>
                                            <option value="0">Không</option>
                                        </select>
                                        @if($errors->has('hot'))
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('hot')}}
                                            </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Tin nổi bật </label>
                                        <select class="form-control" name="highlights">
                                            <option value="">--Chọn--</option>
                                            <option value="1">Tin nổi bật</option>
                                            <option value="0">Không</option>
                                        </select>

                                        @if($errors->has('highlights'))
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('highlights')}}
                                            </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Tin tức mới </label>
                                        <select class="form-control" name="new_posts">
                                            <option value="">--Chọn--</option>
                                            <option value="1">Tin mới</option>
                                            <option value="0">Không</option>
                                        </select>

                                        @if($errors->has('new_posts'))
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('new_posts')}}
                                            </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Hoạt động </label>
                                        <select class="form-control" name="active">
                                            <option value="select">--Chọn--</option>
                                            <option value="1">Hiển thị</option>
                                            <option value="0">No</option>
                                        </select>
                                        @if($errors->has('new_posts'))
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('new_posts')}}
                                            </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Từ khoá tìm kiếm </label>
                                        <input type="text" class="form-control" name="key_words" id="key_words">
                                        @if($errors->has('key_words'))
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('key_words')}}
                                            </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả ngắn</label>
                                        <textarea type="email" class="form-control" name="description" id="description"></textarea>

                                        @if($errors->has('description'))
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('description')}}
                                            </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nội dung</label>
                                        <textarea type="email" class="form-control" name="content" id="content"></textarea>

                                        @if($errors->has('content'))
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('content')}}
                                            </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Vị trí </label>
                                        <select class="form-control" name="posittion">
                                            <option value="">--Chọn--</option>
                                            <option value="1">bài viết mới</option>
                                            <option value="0">No</option>
                                        </select>
                                        @if($errors->has('posittion'))
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('posittion')}}
                                            </label>
                                        @endif
                                    </div>
{{--                                    <div class="checkbox">--}}
{{--                                        <label>--}}
{{--                                            <input type="checkbox" id="remember"> Check me out--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Tạo</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </section>


    </div>
@endsection
@section('my_js')
{{--    <script src="backend/ckeditor/ckeditor.js"></script>--}}
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    <script type="text/javascript">
        $(function () {
            CKEDITOR.replace('ckeditor');
            CKEDITOR.config.pasteFormWordPromptCleanup = true;
            CKEDITOR.config.pasteFormWordRemoveFontStyles = false;
            CKEDITOR.config.pasteFormWordRemoveStyles = false;
            CKEDITOR.config.language = 'vi';
            CKEDITOR.config.htmlEncodeOutput = false;
            CKEDITOR.config.ProcessHTMLEntities = false;
            CKEDITOR.config.entities = false;
            CKEDITOR.config.entities_latin = false;
            CKEDITOR.config.ForceSimpleAmpersand = true;
            CKEDITOR.replace('description',{
                filebrowserBrowseUrl: 'backend/ckfinder/ckfinder.html',
                filebrowserUploadUrl: 'backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserWindowWidth: '1000',
                filebrowserWindowHeight: '700'
            });
            CKEDITOR.replace('content',{
                filebrowserBrowseUrl: 'backend/ckfinder/ckfinder.html',
                filebrowserUploadUrl: 'backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserWindowWidth: '1000',
                filebrowserWindowHeight: '700'
            });

        });
    </script>
@endsection
