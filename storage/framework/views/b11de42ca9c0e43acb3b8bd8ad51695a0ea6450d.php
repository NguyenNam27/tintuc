<div class="row main-content-list-item d-flex justify-content-between mt-5" style="padding: 0 2rem;">
<?php if(!$data->isEmpty()): ?>
        <?php ($i = 0); ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="hightlights-item col-3"  >

                <div class="hightlights-item-img w-100">
                    <img src="<?php echo e(asset($row->image)); ?>" alt="">
                </div>
                <div class="hightlights-item-info w-100">
                    <a href="<?php echo e(route('details_post',['id'=>$row->id])); ?>"><?php echo e($row->title); ?></a>
                </div>
                <?php ($lastID = $row->id); ?>
                <?php ($i++); ?>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    <?php if($i>1): ?>
        <div class="view">
            <p data-id="<?php echo e($lastID); ?>" id="load_more_button">
                Xem thêm...
            </p>
        </div>
    <?php endif; ?>
<?php else: ?>
    <h1></h1>
<?php endif; ?>


