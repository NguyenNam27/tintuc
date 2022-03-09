@extends('BE.layout.main')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                DANH SÁCH DANH MỤC <a href="{{route('admin.category.create')}}" class="btn bg-purple btn-flat"><i
                        class="fa fa-plus"></i> Thêm</a>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-user"></i> QUẢN LÝ </a></li>
            </ol>
        </section>

        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box">

                        <div class="box-header with-border">

                            <h3 class="box-title">Danh Sách </h3>

                        </div>
                        @if(session()->has('success'))
                            <div class="alert alert-success">{{session()->get('success')}}</div>
                        @endif


                        <div class="box-body">
                            <table class="table table-border">
                                <tbody>
                                <tr>
                                    <th style="width: 10px">STT</th>
                                    <th>Tên</th>
                                    <th>Slug</th>
                                     <th>Trạng thái</th>
                                    <th>Hành Động</th>
                                </tr>
                                @foreach($data as $key=>$category)
                                    <tr class="item-{{$category->id}}">
                                        <td>{{$key+1}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>{{$category->active==1 ? 'hiển thị' : 'No'}}</td>
                                        <td>
                                            <a href="{{route('admin.category.edit',['edit'=>$category->id])}}"
                                               class="btn btn-warning btn-edit"><i class="fa fa-pencil"></i></a>
                                            <button data-id="{{$category->id}}" class="btn btn-danger btn-delete"><i
                                                    class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


        </section>
        @endsection
        @section('my_js')
            <script type="text/javascript">
                $(document).ready(function () {

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    })

                    $('.btn-delete').on('click', function () {

                        let id = $(this).data('id');

                        let result = confirm("Bạn có chắc chắn muốn xóa ?");

                        if (result) {
                            $.ajax({
                                url: 'admin/category/'+id,
                                type: 'DELETE',
                                data: {
                                    id:'id'
                                },
                                dataType: "json",
                                success: function (res) {

                                    if (res.success != 'undefined' && res.success == 1) {
                                        $('.item-'+id).remove();
                                    }
                                    window.location.href = 'admin/category/';
                                },
                                error: function (e) {
                                    console.log(e);
                                }
                            })
                        }
                    });
                });
            </script>

@endsection

