@extends('BE.layout.main')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
               QUẢN LÝ DANH SÁCH LOẠI TIN <a href="{{route('admin.subcategory.create')}}" class="btn bg-purple btn-flat"><i
                        class="fa fa-plus"></i> Thêm Loại Tin</a>

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
                                    <th>Danh mục</th>
                                    <th>Trạng thái</th>
                                    <th>Ngày tạo</th>
                                    <th>Hành Động</th>
                                </tr>
                                @foreach($sub as $key=>$item)
                                    <tr class="item-{{$item->id}}">
                                        <td>{{$key+1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{@$item->category->name}}</td>
                                        <td>{{$item->active==1 ? 'hiển thị' : 'No'}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.subcategory.edit',['edit'=>$item->id])}}"
                                               class="btn btn-warning btn-edit"><i class="fa fa-pencil"></i></a>
                                            <button data-id="{{$item->id}}" class="btn btn-danger btn-delete"><i
                                                    class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="box-footer clearfix">
                            {{$sub->links()}}
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
                                url: 'admin/subcategory/'+id,
                                type: 'DELETE',
                                data: {
                                    id:'id'
                                },
                                dataType: "json",
                                success: function (res) {

                                    if (res.success != 'undefined' && res.success == 1) {
                                        $('.item-'+id).remove();
                                    }
                                    window.location.href = 'admin/subcategory/';
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
