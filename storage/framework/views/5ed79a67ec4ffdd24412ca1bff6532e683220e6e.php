<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiến thức</title>
    <base href="<?php echo e(asset('')); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="FE/css/base.css">
    <link rel="stylesheet" href="FE/css/--root.css">
    <link rel="stylesheet" href="FE/css/TinTuc.css">
    <link rel="stylesheet" href="FE/css/KienThuc.css">
</head>

<body>
<?php echo $__env->make('FE.master.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<section>
    <div class="main">
        <div class="container mb-8">
            <div class="title bg ">
                <p>Tin tức</p>
            </div>
            <div class="news-menu">
                <ul class="d-flex m-0">
                    <?php $__currentLoopData = $kienthuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="active" ><a href="<?php echo e(route('KT',['id'=>$kien->id])); ?>" style="color: black"><?php echo e($kien->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="row ">
                <div class="col-xl-9 col-lg-9 col-md-12 col-12 news-left">
                    <div class="row ">
                        <?php $__currentLoopData = $show_kt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="news-left-item col-12 d-flex m-t-25">
                            <div class="col-5 news-left-item-img w-25">
                                <img src="<?php echo e(asset($value->image)); ?>" alt="">
                            </div>
                            <div class="col-7 news-left-item-info w-75 p-r-5">
                                <a href="<?php echo e(route('details_post',['id'=>$value->id])); ?>"><?php echo e($value->title); ?></a>
                                <p>
                                    <?php echo e(strip_tags($value->description)); ?>

                                </p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-12 news-right pl-0 mt-4">
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
                        <div class="news-right-item col-xl-6 col-lg-12 col-6 pr-2 ">
                            <div class="news-right-item-img w-100">
                                <img src="FE/images/coin.jpg" alt="">
                            </div>
                            <div class="news-right-item-info w-100">
                                <a href="#">Thông tin và update mới nhất về dự án</a>
                            </div>
                        </div>
                        <div class="news-right-item col-xl-6 col-lg-12 col-6 pl-2">
                            <div class="news-right-item-img w-100">
                                <img src="FE/images/coin.jpg" alt="">
                            </div>
                            <div class="news-right-item-info w-100">
                                <a href="#">Thông tin và update mới nhất về dự án</a>
                            </div>
                        </div>
                        <div class="news-right-item col-xl-6 col-lg-12 col-6 pr-2 mt-3">
                            <div class="news-right-item-img w-100">
                                <img src="FE/images/coin.jpg" alt="">
                            </div>
                            <div class="news-right-item-info w-100">
                                <a href="#">Thông tin và update mới nhất về dự án</a>
                            </div>
                        </div>
                        <div class="news-right-item col-xl-6 col-lg-12 col-6 pl-2 mt-3">
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
<?php echo $__env->make('FE.master.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="message">
    <div class="icon d-flex flex-column">
        <img src="FE/images/zalo.png" alt="">
        <img src="FE/images/Group 567.png" alt="" id="message">
    </div>
    <div class="box-message ">
        <div class="d-flex justify-content-between flex-column h-100 w-100">
            <p class="p-3">Chat với hỗ trợ</p>
            <div class="box-message-content"></div>
            <div class="box-message-input d-flex justify-content-between p-3">
                <input type="text" placeholder="Viết tin nhắn...">
                <img src="FE/images/send.png" alt="">
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
    $().ready(function () {
        $('.search-icon').click(function () {
            $('.search-input').toggleClass('d-block');
        });
        $('#message').click(function () {
            $('.box-message').toggleClass('d-block');
        });
        $('.news-menu ul li').click(function () {
            $('.news-menu ul li').removeClass('active');
            $(this).addClass('active');
        });

        $('.mb-menu-icon').click(function(){
            $('.mb-menu').show();
        });
        $('.mb-menu svg').click(function(){
            $('.mb-menu').hide();
        });
    })
</script>


</html>
