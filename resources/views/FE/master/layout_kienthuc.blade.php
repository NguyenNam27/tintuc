<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiến thức</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="FE/css/base.css">
    <link rel="stylesheet" href="FE/css/--root.css">
    <link rel="stylesheet" href="FE/css/TinTuc.css">
    <link rel="stylesheet" href="FE/css/KienThuc.css">
</head>

<body>
@include('FE.master.header')

@yield('kienthuc')

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
        // const str = ` <div class="news-left-item col-12 d-flex m-t-25">
        //                         <div class="news-left-item-img w-25">
        //                             <img src="FE/images/coin.jpg" alt="">
        //                         </div>
        //                         <div class="news-left-item-info w-75 p-r-5">
        //                             <a href="#">Báo cáo Thị trường Tiền mã hóa Quý 3/2021 - Kryros Ventures</a>
        //                             <p>Sau ba tháng của Quý 3/2021, thị trường tiền mã hóa đã có sự thay đổi rõ rệt so với giai đoạn trước đó. Nhiều xu hướng tiềm năng mới xuất hiện khiến cho thị trường trở nên đa dạng hơn và kéo theo đó là đà tăng trưởng mạnh mẽ. Hãy cùng KyrOS Ventures nhìn lại thị trường tiền mã hóa trongQuý 3 với bài báo cáo này nhé.
        //                             </p>
        //                         </div>
        //                     </div>`
        // $('.view').click(function () {
        //     $('.news-left .row').append(str);
        // });
    })
</script>
@yield('js_kienthuc')
</html>
