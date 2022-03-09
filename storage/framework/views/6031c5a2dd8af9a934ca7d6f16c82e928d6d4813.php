

        <?php if(!$kienthuc->isEmpty()): ?>
            <?php $__currentLoopData = $kienthuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row ">

                <div class="news-left-item col-12 d-flex m-t-25">
                    <div class="news-left-item-img w-25">
                        <img src="<?php echo e(asset($coin->image)); ?>" alt="">
                    </div>
                    <div class="news-left-item-info w-75 p-r-5">
                        <a href="<?php echo e(route('details_post',['id'=>$coin->id])); ?>"><?php echo e($coin->title); ?></a>
                        <p>
                            <?php echo e(strip_tags($coin->description)); ?>

                        </p>
                    </div>
                </div>
        </div>

                <?php ($last = $coin->id); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="view">
                <p data-id="<?php echo e($last); ?>"  id="load_more_button">
                    Xem thêm...
                </p>
            </div>
        <?php else: ?>
            <h1></h1>
        <?php endif; ?>

