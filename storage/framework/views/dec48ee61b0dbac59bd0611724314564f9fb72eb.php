<?php $__env->startSection('chitiet'); ?>
    <section>
        <div class="main p-4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-12 col-12 left-info pr-5">

                        <div class="left-info-title">
                            <a href="<?php echo e(route('tintuc')); ?>">
                                <p>Home - Tin tức</p>
                            </a>
                            <h2>
                                <?php echo e($chitiet->title); ?>

                            </h2>
                            <p>00/01/2021</p>
                        </div>
                        <div class="left-info-img">
                            <img src="<?php echo e(asset($chitiet->image)); ?>" alt="">
                        </div>
                        <div class="left-info-text">
                            <h3>Tổng quan trò chơi </h3>
                            <p><?php echo e(strip_tags($chitiet->description)); ?></p>
                        </div>

                        <div class="left-info-text">
                            <h3>Hệ sinh thái Mech Master </h3>
                            <p>
                                <?php echo e(strip_tags($chitiet->content)); ?>

                            </p>
                        </div>

                        <div class="news-left">

                            <div class="title bg news-left-title">
                                <p>Có thể bạn quan tâm</p>
                            </div>
                            <div class="row ">
                                <?php $__currentLoopData = $replate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="news-left-item col-xl-6 col-lg-6 col-md-12 col-12 d-flex m-t-25">
                                    <div class="news-left-item-img w-50">
                                        <img src="<?php echo e(asset($rep->image)); ?>" alt="">
                                    </div>
                                    <div class="news-left-item-info w-50">
                                        <a href="<?php echo e(route('details_post',['id'=>$rep->id])); ?>"><?php echo e($rep->title); ?></a>

                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12 col-12 right-info">
                        <div class="row ">
                            <?php $__currentLoopData = $tinhot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tin2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="news-right-item col-6 pr-2 ">
                                <div class="news-right-item-img w-100">
                                    <img src="<?php echo e(asset($tin2->image)); ?>" alt="">
                                </div>
                                <div class="news-right-item-info w-100">
                                    <a href="<?php echo e(route('details_post',['id'=>$tin2->id])); ?>"><?php echo e(strip_tags($tin2->description)); ?></a>
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

<?php echo $__env->make('FE.master.layout_chitiet', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>