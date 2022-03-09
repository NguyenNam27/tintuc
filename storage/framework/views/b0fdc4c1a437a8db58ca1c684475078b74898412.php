<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo e(asset('')); ?>">
    <title>Trang chủ - LTC</title>
    <link rel="stylesheet" href="FE/css/--root.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='FE/libs/fullcalendar-5.9.0/lib/main.css' rel='stylesheet'>
    <link rel="stylesheet" href="FE/css/Trang-chu.css">
    <link rel="stylesheet" href="FE/css/base.css">
    <script src='FE/libs/fullcalendar-5.9.0/lib/main.js'></script>

    <style>
        #calendar {
            color: #000;
        }

        #calendar .fc-toolbar-title {
            color: #000;
        }

        .fc-toolbar {
            text-transform: uppercase;
        }

        .fc-event {
            border: transparent;
            /* default BORDER color */
            background-color: transparent;
            /* default BACKGROUND color */
            /* color: #fff; */
            /* default TEXT color */
            font-size: 3em;
            text-align: center;
            /* EDIT HERE */
            cursor: default;
        }

        .fc .fc-daygrid-day-top {
            flex-direction: unset !important;
            margin: 0.3rem 0 0 0.3rem;
        }

        .fc .fc-day-today {
            background-color: unset !important;
        }

        .fc .fc-day-today .fc-daygrid-day-number {
            background-color: #FFED8D;
            border-radius: 50%;
        }

        .fc .fc-daygrid-day-number {
            width: 2rem;
            height: 2rem;
            text-align: center;
            font-size: 1.3rem;
            padding: 0;
        }

        .fc .fc-toolbar.fc-header-toolbar {
            background-color: var(--primaryColor);
            margin: 0;
            padding: 1rem 0;
        }

        .fc .fc-toolbar.fc-header-toolbar h2 {
            font-size: 2.3rem;
            font-weight: 700;
        }

        .fc-theme-standard td {
            border: 2px solid #000 !important;
        }

        .fc-theme-standard th {
            border-right: 2px solid #000 !important;
        }

        .fc-event-title.fc-sticky {
            font-size: var(--px50);
            font-weight: 500;
        }
    </style>

</head>

<body>
<header class="w-100">
    <div class="container h-100">
        <div class="row d-flex justify-content-between align-items-center h-100">
            <div class="logo">
                <a href="Trang-chu.html">
                    <img src="FE/images/Artboard 2 copy.png" alt="" style="width: 100%;">
                </a>
            </div>
            <nav class="menu">
                <ul class="d-flex justify-content-between align-items-center">
                    <li><a href="Ve-LTC.html">Về LTC</a></li>
                    <li><a href="Tin-tuc.html">Tin tức</a></li>
                    <li><a href="Noi-bat.html">Nổi bật</a></li>
                    <li><a href="Kien-thuc.html">Kiến thức</a></li>
                    <li><a href="OTC.html">OTC</a></li>
                </ul>
            </nav>
            <div class="search ">
                <div class="search-icon">
                    <img src="FE/images/search.png" alt="">
                </div>
                <input type="text" placeholder="Tìm kiếm" class="search-input">
            </div>
        </div>
    </div>
</header>

<?php echo $__env->yieldContent('content'); ?>

<footer class="w-100">
    <div class="container">
        <div class="row d-flex  align-items-start">
            <div class="col-4 logo-footer pl-0">
                <img src="FE/images/Artboard 2 copy.png" alt="">
            </div>
            <div class="col-4 title-footer">
                <p>Trang web LTCrypto.com được ra đời nhằm cung cấp cho traders những thông tin chính xác, những
                    kiến thức hữu ích về thị trường tiền mã hóa. Có thể nói LCrypto là cổng thông tin do người Việt
                    Nam phát triển và dành riêng cho người Việt Nam. Tất cả nội dung liên quan đến công nghệ
                    Blockchain hay Cryptocurrency đều sẽ được tìm thấy tại LTCrypto.</p>
            </div>
            <div class="col-4 link-footer d-flex  flex-column align-items-center ">
                <p>Liên hệ với LTC</p>
                <div class="list-icon d-flex align-items-center ">
                    <img src="FE/images/facebook (2).png" alt="">
                    <img src="FE/images/telegram.png" alt="">
                    <img src="FE/images/Group 567.png" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
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
        })
        $('#message').click(function () {
            $('.box-message').toggleClass('d-block');
        })
    });

    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: '',
                center: 'title',
                right: ''
            },
            locale: 'vi',
            eventSources: [
                {
                    url: 'FE/js/calendar-data.json',
                    type: 'GET',
                    data: {

                    },
                    error: function () {
                        alert('there was an error while fetching shedule!');
                    },
                }
            ]
        });
        calendar.render();
    });
</script>

</html>
