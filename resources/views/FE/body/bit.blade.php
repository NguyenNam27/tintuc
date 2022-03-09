<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="FE/css/base.css">
    <link rel="stylesheet" href="FE/css/--root.css">
    <link rel="stylesheet" href="FE/css/TinTuc.css">
</head>

<body>
@include('FE.master.header')
<section>
    <div class="main">
        <div class="container mb-8">
            <div class="title bg">
                <p>Tin tức</p>
            </div>
            <div class="news-menu">
                <ul class="d-flex ">
                    <li class="active"><a href="{{route('tintuc')}}" style="color:black;">Tất cả</a></li>
                    @foreach($tintuc as $tin)
                        <li><a href="{{route('lt_bv',['id'=>$tin->id])}}" style="color: black">{{$tin->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="row news-tittle">
                @foreach($show_two as $sh)
                <div class="col-6 h-100">
                    <div class=" w-100 news-same">

                        <div class=" news-same-img">
                            <img src="{{asset($sh->image)}}" alt="" style="width: 100%;">
                        </div>
                        <div class=" w-100 news-same-info">
                            <a href="{{route('details_post',['id'=>$sh->id])}}">{{$sh->title}}</a>
                            <span>{{strip_tags($sh->description)}}</span>
                            <div class="d-flex align-items-center news-same-icon" style="width: 1.2rem;">
                                <img src="FE/images/credit-card.png" alt="" class="w-100 mr-2">
                                <span>00/00/2021</span>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <div class="row ">
                <div class="col-9 news-left">
                    <div class="row ">
                        @foreach($bit as $value)
                        <div class="news-left-item col-6 d-flex m-t-25">
                            <div class="news-left-item-img w-50">
                                <img src="{{asset($value->image)}}" alt="">
                            </div>
                            <div class="news-left-item-info w-50">
                                <a href="{{route('details_post',['id'=>$value->id])}}">{{$value->title}}</a>
                                <p>{{strip_tags($value->description)}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-3 news-right pl-0 mt-4">
                    <div class="title bg news-right-title">
                        <p>Tin tức hot</p>
                    </div>
                    <div class="row ">
                        @foreach($tinhot as $tin)
                            <div class="news-right-item col-6 pr-2 ">
                                <div class="news-right-item-img w-100">
                                    <img src="{{asset($tin->image)}}" alt="">
                                </div>
                                <div class="news-right-item-info w-100">
                                    <a href="{{route('details_post',['id'=>$tin->id])}}">{{$tin->title}}</a>
                                </div>
                            </div>
                        @endforeach
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
    })
</script>

</html>
