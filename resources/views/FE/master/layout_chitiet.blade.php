<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="FE/css/base.css">
    <link rel="stylesheet" href="FE/css/--root.css">
    <link rel="stylesheet" href="FE/css/TinTuc.css">
    <link rel="stylesheet" href="FE/css/ChiTiet.css">

</head>

<body>
@include('FE.master.header')
@yield('chitiet')
@include('FE.master.footer')
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
{{--<div class="mb-menu">--}}
{{--    <div class="mb-menu-logo">--}}
{{--        <img src="FE/images/Artboard 2 copy.png" alt="">--}}
{{--    </div>--}}
{{--    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"--}}
{{--         viewBox="0 0 16 16">--}}
{{--        <path fill-rule="evenodd"--}}
{{--              d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />--}}
{{--        <path fill-rule="evenodd"--}}
{{--              d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />--}}
{{--    </svg>--}}
{{--    <ul class="">--}}
{{--        <li><a href="Ve-LTC.html">Về LTC</a></li>--}}
{{--        <li><a href="Tin-tuc.html">Tin tức</a></li>--}}
{{--        <li><a href="Noi-bat.html">Nổi bật</a></li>--}}
{{--        <li><a href="Kien-thuc.html">Kiến thức</a></li>--}}
{{--        <li><a href="OTC.html">OTC</a></li>--}}
{{--    </ul>--}}
{{--</div>--}}
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
        $('.mb-menu-icon').click(function () {
            $('.mb-menu').show();
        });
        $('.mb-menu svg').click(function () {
            $('.mb-menu').hide();
        });
    })
</script>

</html>
