@extends('FE.master.layout_tintuc')
@section('tintuc')
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
                    @foreach($new as $new )
                    <div class="col-6 h-100">
                        <div class=" w-100 news-same">
                            <div class=" news-same-img">
                                <img src="{{asset($new->image)}}" alt="" style="width: 100%;">
                            </div>
                            <div class=" w-100 news-same-info">
                                <a href="{{route('details_post',['id'=>$new->id])}}">{{$new->title}}</a>
                                <span> {{strip_tags($new->description)}}</span>
                                <div class=" d-flex align-items-center news-same-icon" style="width: 1.2rem;">
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
                            @foreach($KTBL as $KTBL)
                            <div class="news-left-item col-6 d-flex m-t-25">
                                <div class="news-left-item-img w-50">
                                    <img src="{{asset($KTBL->image)}}" alt="">
                                </div>
                                <div class="news-left-item-info w-50">
                                    <a href="{{route('details_post',['id'=>$KTBL->id])}}">{{$KTBL->title}}</a>
                                    <p>{{strip_tags($KTBL->description)}}</p>
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
@endsection
