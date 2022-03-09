<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
               QUẢN LÝ DANH SÁCH LOẠI TIN <a href="<?php echo e(route('admin.subcategory.create')); ?>" class="btn bg-purple btn-flat"><i
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
                        <?php if(session()->has('success')): ?>
                            <div class="alert alert-success"><?php echo e(session()->get('success')); ?></div>
                        <?php endif; ?>


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
                                <?php $__currentLoopData = $sub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="item-<?php echo e($item->id); ?>">
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e(@$item->category->name); ?></td>
                                        <td><?php echo e($item->active==1 ? 'hiển thị' : 'No'); ?></td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.subcategory.edit',['edit'=>$item->id])); ?>"
                                               class="btn btn-warning btn-edit"><i class="fa fa-pencil"></i></a>
                                            <button data-id="<?php echo e($item->id); ?>" class="btn btn-danger btn-delete"><i
                                                    class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>

                        </div>
                        <div class="box-footer clearfix">
                            <?php echo e($sub->links()); ?>

                        </div>
                    </div>
                </div>

            </div>


        </section>
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('my_js'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('BE.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>