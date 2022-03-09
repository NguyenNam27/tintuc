@extends('BE.layout.main')
@section('content')

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Chỉnh sửa bài viết <a href="{{route('admin.post.index')}}" class="btn bg-purple "><i
                        class="fa fa-plus"></i> Danh sách bài viết</a>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> danh sách</a></li>
                <li><a href="#"> Chỉnh sửa bài viết </a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nhập thông tin bài viết mới</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" action="{{route('admin.post.update',['edit'=>$editPost->id])}}"
                              method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nhập tiêu đề bài viết mới</label>
                                        <input value="{{$editPost->title}}" type="text" class="form-control"
                                               name="title" id="title"
                                               placeholder="nhập tiêu đề">
                                        @if($errors->has('title'))
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('title')}}
                                            </label>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hình ảnh mới</label>
                                        <input type="file" id="image" name="image"><br>
                                        <img src="{{asset($editPost->image)}} " width="100px" height="70px">
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
                                            <option value="" >--Chọn danh mục--</option>

                                            @foreach($subcate as $item)
                                                <option
                                                    value="{{$item->id}}" {{($editPost->subcategories_id == $item->id) ? 'selected' : '' }}>{{$item->name}}
                                                </option>
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
                                            <option value="">{{($editPost->hot == 1) ? 'Tin hot' : 'không' }}</option>
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
                                            <option value="">{{($editPost->highlights == 1) ? 'Tin nổi bật' : 'không' }}</option>
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
                                            <option value="">{{($editPost->new_posts == 1) ? 'Tin mới' : 'không' }}</option>
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
                                            <option value="">{{($editPost->active == 1) ? 'hiển thị' : 'không' }}</option>
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
                                        <input value="{{$editPost->key_words}}" type="text" class="form-control"
                                               name="key_words" id="key_words">
                                        @if($errors->has('key_words'))
                                            <label class="Text-red"
                                                   style=" font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('key_words')}}
                                            </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mô tả ngắn</label>
                                        <textarea type="email" class="form-control" name="description"
                                                  id="description">{{$editPost->description}}</textarea>

                                        @if($errors->has('description'))
                                            <label class="Text-red"
                                                   style="font-size:15px;font-weight:600;margin-top:5px;color:red">
                                                <i class="fa fa-info"></i>{{$errors->first('description')}}
                                            </label>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nội dung</label>
                                        <textarea type="email" class="form-control" name="content"
                                                  id="content">{{$editPost->content}}</textarea>

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
                                                <option value="">{{($editPost->posittion == 1) ? 'Vị trí bài viết mới' : 'không' }}</option>
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
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="remember"> Check
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
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
            // CKEDITOR.replace('ckeditor');
            CKEDITOR.config.pasteFormWordPromptCleanup = true;
            CKEDITOR.config.pasteFormWordRemoveFontStyles = false;
            CKEDITOR.config.pasteFormWordRemoveStyles = false;
            CKEDITOR.config.language = 'vi';
            CKEDITOR.config.htmlEncodeOutput = false;
            CKEDITOR.config.ProcessHTMLEntities = false;
            CKEDITOR.config.entities = false;
            CKEDITOR.config.entities_latin = false;
            CKEDITOR.config.ForceSimpleAmpersand = true;
            CKEDITOR.replace('description');
            CKEDITOR.replace('content');
        });
    </script>
@endsection
