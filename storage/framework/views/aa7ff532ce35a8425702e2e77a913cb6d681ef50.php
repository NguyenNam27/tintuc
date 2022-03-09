<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">

        <section class="content-header">
            <h1>
                DANH SÁCH QUẢN LÝ LOẠI TIN  <a href="" class="btn bg-purple btn-flat"><i class="fa fa-plus"></i> Thêm</a>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-user"></i> QUẢN LÝ  </a></li>
            </ol>
        </section>

        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box">

                        <div class="box-header with-border">

                            <h3 class="box-title">Danh Sách </h3>

                        </div>
                        
                        
                        


                        <div class="box-body">
                            <table class="table table-border">
                                <tbody>
                                <tr>
                                    <th style="width: 10px">STT</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Hành Động</th>
                                </tr>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="item-<?php echo e($type->id); ?>">
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($type->Name); ?></td>
                                        <td><?php echo e($type->Slug); ?></td>
                                        <td>

                                            <a href="" class="btn btn-warning btn-edit"><i class="fa fa-pencil"></i></a>
                                            <button data-id="" class="btn btn-danger btn-delete"><i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


        </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('my_js'); ?>
    
    
    
    
    
    
    
    

    

    

    

    

    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    

    

    
    
    

    
    
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('BE.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>