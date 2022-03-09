<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTC</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="FE/css/base.css">
    <link rel="stylesheet" href="FE/css/--root.css">
    <link rel="stylesheet" href="FE/css/OTC.css">
</head>

<body>
<?php echo $__env->make('FE.master.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('OTC'); ?>
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
        $('.main-menu ul li').click(function () {
            $('.main-menu ul li').removeClass('active');
            $(this).addClass('active');
        });
        $('.btn-sell').hide();
        $('.buy').click(function () {
            $('.usdt-title h3').text('Mua USDT');
            $('.usdt-main-left p').text('Số USDT muốn mua');
            $('.usdt-main span').text('23.300');
            $('.btn-sell').hide();
            $('.btn-buy').show();
            $('.box-sell').hide();
            $('.usdt').show();
        });
        $('.sell').click(function () {
            $('.usdt-title h3').text('Bán USDT');
            $('.usdt-main-left p').text('Số USDT muốn bán');
            $('.usdt-main span').text('23.100');
            $('.btn-sell').show();
            $('.btn-buy').hide();
            $('.box-buy').hide();
            $('.box-pay').hide();
            $('.usdt').show();
        });
        $('.btn-buy').click(function () {
            $('.box-buy').show();
            $('.usdt').hide();
        });
        $('.button-buy').click(function () {
            $('.box-pay').show();
            $('.box-buy').hide();
        });
        $('.btn-sell').click(function () {
            $('.box-sell').show();
            $('.usdt').hide();
        });
        $('.pay-btn').click(function () {
            $('.buy-message').show();
            setTimeout(function () {
                $('.buy-message').hide();
            }, 1500);
        });
        $('.buy-btn').click(function () {
            $('.buy-message').show();
            setTimeout(function () {
                $('.buy-message').hide();
            }, 1500);
        });


    })
</script>

</html>
