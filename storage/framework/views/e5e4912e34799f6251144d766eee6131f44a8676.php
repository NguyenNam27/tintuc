<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Chỉnh sửa loại tin <a href="<?php echo e(route('admin.subcategory.index')); ?>" class="btn bg-purple "><i class="fa fa-plus"></i> Danh sách loại tin</a>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Chỉnh sửa loại tin</a></li>

            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nhập thông tin loại tin mới</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <form role="form" action = "<?php echo e(route('admin.subcategory.update',['edit'=>$edit->id])); ?>" method = "post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nhập tên loại tin mới</label>
                                        <input value="<?php echo e($edit->name); ?>" type="text" class="form-control" name ="name" id="name" placeholder="Nhập tên loại tin">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Chọn Danh mục mới</label>
                                        <select class="form-control" name="categories_id">
                                            <option value="<?php echo e($edit->id); ?>}">--Chọn danh mục--</option>
                                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hoạt động</label>
                                        <input value="<?php echo e($edit->active); ?>" type="number" class="form-control" name="active" id="active" placeholder="" min="0" max="1">

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('BE.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>