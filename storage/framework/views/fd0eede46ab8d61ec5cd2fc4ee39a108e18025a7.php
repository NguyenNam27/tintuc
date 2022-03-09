<?php $__env->startSection('tintuc'); ?>
    <section>
        <div class="main">
            <div class="container mb-8">
                <div class="title bg">
                    <p>Tin tức</p>
                </div>
                <div class="news-menu">
                    <ul class="d-flex ">
                        <li class="active"><a href="<?php echo e(route('tintuc')); ?>" style="color:black;">Tất cả</a></li>
                        <?php $__currentLoopData = $tintuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('lt_bv',['id'=>$tin->id])); ?>" style="color: black"><?php echo e($tin->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </ul>
                </div>
                <div class="row news-tittle">
                    <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6 h-100">
                        <div class=" w-100 news-same">
                            <div class=" news-same-img">
                                <img src="<?php echo e(asset($new->image)); ?>" alt="" style="width: 100%;">
                            </div>
                            <div class=" w-100 news-same-info">
                                <a href="<?php echo e(route('details_post',['id'=>$new->id])); ?>"><?php echo e($new->title); ?></a>
                                <span> <?php echo e(strip_tags($new->description)); ?></span>
                                <div class=" d-flex align-items-center news-same-icon" style="width: 1.2rem;">
                                    <img src="FE/images/credit-card.png" alt="" class="w-100 mr-2">
                                    <span>00/00/2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row ">
                    <div class="col-9 news-left">
                        <div class="row ">
                            <?php $__currentLoopData = $KTBL; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $KTBL): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="news-left-item col-6 d-flex m-t-25">
                                <div class="news-left-item-img w-50">
                                    <img src="<?php echo e(asset($KTBL->image)); ?>" alt="">
                                </div>
                                <div class="news-left-item-info w-50">
                                    <a href="<?php echo e(route('details_post',['id'=>$KTBL->id])); ?>"><?php echo e($KTBL->title); ?></a>
                                    <p><?php echo e(strip_tags($KTBL->description)); ?></p>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-3 news-right pl-0 mt-4">
                        <div class="title bg news-right-title">
                            <p>Tin tức hot</p>
                        </div>
                        <div class="row ">
                            <?php $__currentLoopData = $tinhot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="news-right-item col-6 pr-2 ">
                                <div class="news-right-item-img w-100">
                                    <img src="<?php echo e(asset($tin->image)); ?>" alt="">
                                </div>
                                <div class="news-right-item-info w-100">
                                    <a href="<?php echo e(route('details_post',['id'=>$tin->id])); ?>"><?php echo e($tin->title); ?></a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="title bg news-right-title">
                            <p>Tin tức được xem nhiều nhất</p>
                        </div>
                        <div class="row ">
                            <div class="news-right-item col-6 pr-2 ">
                                <div class="news-right-item-img w-100">
                                    <img src="FE/images/coin.jpg" alt="">
                                </div>
                                <div class="news-right-item-info w-100">
                                    <a href="#">Thông tin và update mới nhất về dự án</a>
                                </div>
                            </div>
                            <div class="news-right-item col-6 pl-2">
                                <div class="news-right-item-img w-100">
                                    <img src="FE/images/coin.jpg" alt="">
                                </div>
                                <div class="news-right-item-info w-100">
                                    <a href="#">Thông tin và update mới nhất về dự án</a>
                                </div>
                            </div>
                            <div class="news-right-item col-6 pr-2 mt-3">
                                <div class="news-right-item-img w-100">
                                    <img src="FE/images/coin.jpg" alt="">
                                </div>
                                <div class="news-right-item-info w-100">
                                    <a href="#">Thông tin và update mới nhất về dự án</a>
                                </div>
                            </div>
                            <div class="news-right-item col-6 pl-2 mt-3">
                                <div class="news-right-item-img w-100">
                                    <img src="FE/images/coin.jpg" alt="">
                                </div>
                                <div class="news-right-item-info w-100">
                                    <a href="#">Thông tin và update mới nhất về dự án</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FE.master.layout_tintuc', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>