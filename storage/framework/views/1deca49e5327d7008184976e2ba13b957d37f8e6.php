<?php $__env->startSection('content'); ?>
    <section>
        <div class="main">
            <div class="container">
                <div class="new-post w-100">
                    <div class="title bg ">
                        <p>Bài viết mới</p>
                    </div>
                    <div class="row new-post-main">
                        <div class=" col-8 h-100 " style="padding-right: 2.5rem;">
                            <?php $__currentLoopData = $new_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="new-post-left w-100 news-same">
                                    <div class="new-post-left_img news-same-img">
                                        <img src="<?php echo e(asset($item->image)); ?>" alt="" style="width: 100%;">
                                    </div>
                                    <div class="new-post-left_info w-100 news-same-info">
                                        <a href="<?php echo e(route('details_post',['id'=>$item->id])); ?>"><?php echo e($item->title); ?></a>
                                        <span></span>
                                        <div class="icon  d-flex align-items-center news-same-icon mt-3"
                                             style="width: 1.2rem;">
                                            <img src="FE/images/credit-card.png" alt="" class="w-100 mr-2">
                                            <span>00/00/2021</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-4 h-100 pl-0">
                            <div class=" new-post-right ">
                                <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $high): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class=" d-flex justify-content-between flex-column h-100 w-100">
                                        <div class="col-12 new-post-right_item d-flex pt-0">
                                            <div class=" col-6 new-post-right_item__img">
                                                <img src="<?php echo e(asset($high->image)); ?>" alt="">
                                            </div>
                                            <div class=" col-6 new-post-right_item__info pr-0">
                                                <a href="<?php echo e(route('details_post',['id'=>$high->id])); ?>"><?php echo e($high->title); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" calendar w-100">
                    <div class=" title bg ">
                        <p>Lợi nhuận của LTC</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div id="calendar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" posts">
                <div class="container">
                    <div class=" title bg ">
                        <p>Bài viết nổi bật</p>
                    </div>
                </div>
                <div class="container-fluid  post-main">
                    <div id="carouselExampleControls" class="carousel slide container" data-ride="carousel">
                        <div class="carousel-inner ">
                            <?php $__currentLoopData = $highlights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $hh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if( $key % 3 == 0): ?>
                                    <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">

                                        <div class="row  slider justify-content-between">
                                            <?php endif; ?>
                                            <div class="col-4 slider-item d-flex justify-content-between flex-column ">
                                                <div class="slider-item-info">
                                                    <div class="slider-item-img">
                                                        <img src="<?php echo e($hh->image); ?>" alt="" style="width: 100%;">
                                                    </div>
                                                    <a href="<?php echo e(route('details_post',['id'=>$hh->id])); ?>"><?php echo e($hh->title); ?></a>
                                                </div>
                                                <div class="icon  d-flex align-items-center" style="width: 1.2rem;">
                                                    <img src="FE/images/credit-card.png" alt="" class="w-100 mr-2">
                                                    <span>00/00/2021</span>
                                                </div>
                                            </div>


                                            <?php if($key%3 == 2): ?>
                                        </div>
                                    </div>

                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                       data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                       data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

            </div>

        </div>
        <div class="news">
            <div class="container">
                <div class=" title bg m-t-4">
                    <p>Tin tức </p>
                </div>
                <div class="row">
                    <div class="col-6 ">
                        <div class=" title  bd-1 mb-4">
                            <p>Crypto </p>
                        </div>
                        <?php $__currentLoopData = $crypto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crypto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row news-item">
                                <div class="col-4 news-item-img">
                                    <a href="#">
                                        <img src="<?php echo e(asset($crypto->image)); ?>" alt="">
                                    </a>
                                </div>
                                <div class="col-8 news-item-info">
                                    <a href="<?php echo e(route('details_post',['id'=>$crypto->id])); ?>"><?php echo e($crypto->title); ?></a>
                                    <p><?php echo e(strip_tags($crypto->description)); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-6 ">
                        <div class=" title  bd-1 mb-4">
                            <p>Đội nhóm LTC </p>
                        </div>
                        <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doinhom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row news-item">
                                <div class="col-4 news-item-img">
                                    <a href="#">
                                        <img src="<?php echo e(asset($doinhom->image)); ?>" alt="">
                                    </a>
                                </div>
                                <div class="col-8 news-item-info">
                                    <a href="<?php echo e(route('details_post',['id'=>$doinhom->id])); ?>"><?php echo e($doinhom->title); ?></a>
                                    <p><?php echo e(strip_tags($doinhom->description)); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltc-tv">
            <div class="container">
                <div class=" title bg m-t-4">
                    <p>LTC TV </p>
                </div>
                <div class="row ltc-tv-main">
                    <div class=" col-8 h-100 " style="padding-right: 2.5rem;">
                        <div class="new-post-left w-100 news-same">
                            <?php $__currentLoopData = $LTC_TV; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $LTC): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="new-post-left_img news-same-img">
                                <img src="<?php echo e(asset($LTC->image)); ?>" alt="" style="width: 100%;">
                            </div>
                            <div class="new-post-left_info w-100 news-same-info">
                                <a href="https://www.youtube.com/watch?v=s4g1XFU8Gto"><?php echo e($LTC->title); ?></a>
                                <span></span>
                                <div class="icon  d-flex align-items-center news-same-icon mt-3"
                                     style="width: 1.2rem;">
                                    <img src="FE/images/credit-card.png" alt="" class="w-100 mr-2">
                                    <span>00/00/2021</span>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-4 h-100 pl-0">

                        <div class=" new-post-right ">
                            <div class=" d-flex justify-content-between flex-column h-100 w-100">

                                <div class="col-12 new-post-right_item d-flex pt-0">
                                    <?php $__currentLoopData = $LTCTV; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $LT): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class=" col-6 new-post-right_item__img">
                                        <img src="<?php echo e(asset($LT->image)); ?>" alt="">
                                    </div>
                                    <div class=" col-6 new-post-right_item__info pr-0">
                                        <a href="https://www.youtube.com/watch?v=s4g1XFU8Gto"><?php echo e($LT->title); ?></a>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="knowledge">
            <div class="container">
                <div class=" title bg m-t-4">
                    <p>Kiến thức </p>
                </div>
                <div class="row">
                    <div class="col-4 knowledge-list-item ">
                        <div class="row m-0">
                            <div class=" col-12 title  mb-3 bd-1">
                                <p>Kiến thức Crypto </p>
                            </div>
                            <?php $__currentLoopData = $KT_crypto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $KT): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12 knowledge-item d-flex ">
                                    <div class="col-6 knowledge-item-img p-0">
                                        <img src="<?php echo e(asset($KT->image)); ?>" alt="">
                                    </div>
                                    <div class="col-6 knowledge-item-content">
                                        <a href="<?php echo e(route('details_post',['id'=>$KT->id])); ?>"><?php echo e($KT->title); ?> </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    </div>
                    <div class="col-4 knowledge-list-item ">
                        <div class="row m-0">
                            <div class=" col-12 title  mb-3 bd-1">
                                <p>Dành cho người mới </p>
                            </div>
                            <?php $__currentLoopData = $KTNM; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $KTNM): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12 knowledge-item d-flex ">
                                    <div class="col-6 knowledge-item-img p-0">
                                        <img src="<?php echo e(asset($KTNM->image)); ?>" alt="">
                                    </div>
                                    <div class="col-6 knowledge-item-content">
                                        <a href="<?php echo e(route('details_post',['id'=>$KTNM->id])); ?>"><?php echo e($KTNM->title); ?> </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    </div>
                    <div class="col-4 knowledge-list-item ">
                        <div class="row m-0">
                            <div class=" col-12 title  mb-3 bd-1">
                                <p>Kiến thức bên lề </p>
                            </div>
                            <?php $__currentLoopData = $KTBL; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $KTBL): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12 knowledge-item d-flex ">
                                    <div class="col-6 knowledge-item-img p-0">
                                        <img src="<?php echo e(asset($KTBL->image)); ?>" alt="">
                                    </div>
                                    <div class="col-6 knowledge-item-content">
                                        <a href="<?php echo e(route('details_post',['id'=>$KTBL->id])); ?>"><?php echo e($KTBL->title); ?></a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('FE.master.layout_trangchu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>