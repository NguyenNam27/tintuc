@extends('FE.master.layout_trangchu')
@section('content')
    <section>
        <div class="main">
            <div class="container">
                <div class="new-post w-100">
                    <div class="title bg ">
                        <p>Bài viết mới</p>
                    </div>
                    <div class="row new-post-main">
                        <div class=" col-8 h-100 " style="padding-right: 2.5rem;">
                            @foreach($new_posts as $item)
                                <div class="new-post-left w-100 news-same">
                                    <div class="new-post-left_img news-same-img">
                                        <img src="{{asset($item->image)}}" alt="" style="width: 100%;">
                                    </div>
                                    <div class="new-post-left_info w-100 news-same-info">
                                        <a href="{{route('details_post',['id'=>$item->id])}}">{{$item->title}}</a>
                                        <span></span>
                                        <div class="icon  d-flex align-items-center news-same-icon mt-3"
                                             style="width: 1.2rem;">
                                            <img src="FE/images/credit-card.png" alt="" class="w-100 mr-2">
                                            <span>00/00/2021</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-4 h-100 pl-0">
                            <div class=" new-post-right ">
                                @foreach($new as $high)
                                    <div class=" d-flex justify-content-between flex-column h-100 w-100">
                                        <div class="col-12 new-post-right_item d-flex pt-0">
                                            <div class=" col-6 new-post-right_item__img">
                                                <img src="{{asset($high->image)}}" alt="">
                                            </div>
                                            <div class=" col-6 new-post-right_item__info pr-0">
                                                <a href="{{route('details_post',['id'=>$high->id])}}">{{$high->title}}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                            @foreach($highlights as $key=> $hh)
                                @if( $key % 3 == 0)
                                    <div class="carousel-item {{$key == 0 ? 'active' : ''}}">

                                        <div class="row  slider justify-content-between">
                                            @endif
                                            <div class="col-4 slider-item d-flex justify-content-between flex-column ">
                                                <div class="slider-item-info">
                                                    <div class="slider-item-img">
                                                        <img src="{{$hh->image}}" alt="" style="width: 100%;">
                                                    </div>
                                                    <a href="{{route('details_post',['id'=>$hh->id])}}">{{$hh->title}}</a>
                                                </div>
                                                <div class="icon  d-flex align-items-center" style="width: 1.2rem;">
                                                    <img src="FE/images/credit-card.png" alt="" class="w-100 mr-2">
                                                    <span>00/00/2021</span>
                                                </div>
                                            </div>


                                            @if($key%3 == 2)
                                        </div>
                                    </div>

                        @endif
                        @endforeach
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
                        @foreach($crypto as $crypto)
                            <div class="row news-item">
                                <div class="col-4 news-item-img">
                                    <a href="#">
                                        <img src="{{asset($crypto->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="col-8 news-item-info">
                                    <a href="{{route('details_post',['id'=>$crypto->id])}}">{{$crypto->title}}</a>
                                    <p>{{strip_tags($crypto->description)}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-6 ">
                        <div class=" title  bd-1 mb-4">
                            <p>Đội nhóm LTC </p>
                        </div>
                        @foreach($group as $doinhom)
                            <div class="row news-item">
                                <div class="col-4 news-item-img">
                                    <a href="#">
                                        <img src="{{asset($doinhom->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="col-8 news-item-info">
                                    <a href="{{route('details_post',['id'=>$doinhom->id])}}">{{$doinhom->title}}</a>
                                    <p>{{strip_tags($doinhom->description)}}</p>
                                </div>
                            </div>
                        @endforeach
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
                            @foreach($LTC_TV as $LTC)
                            <div class="new-post-left_img news-same-img">
                                <img src="{{asset($LTC->image)}}" alt="" style="width: 100%;">
                            </div>
                            <div class="new-post-left_info w-100 news-same-info">
                                <a href="https://www.youtube.com/watch?v=s4g1XFU8Gto">{{$LTC->title}}</a>
                                <span></span>
                                <div class="icon  d-flex align-items-center news-same-icon mt-3"
                                     style="width: 1.2rem;">
                                    <img src="FE/images/credit-card.png" alt="" class="w-100 mr-2">
                                    <span>00/00/2021</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-4 h-100 pl-0">

                        <div class=" new-post-right ">
                            <div class=" d-flex justify-content-between flex-column h-100 w-100">

                                <div class="col-12 new-post-right_item d-flex pt-0">
                                    @foreach($LTCTV as $LT)
                                    <div class=" col-6 new-post-right_item__img">
                                        <img src="{{asset($LT->image)}}" alt="">
                                    </div>
                                    <div class=" col-6 new-post-right_item__info pr-0">
                                        <a href="https://www.youtube.com/watch?v=s4g1XFU8Gto">{{$LT->title}}</a>
                                    </div>
                                    @endforeach
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
                            @foreach($KT_crypto as $KT)
                                <div class="col-12 knowledge-item d-flex ">
                                    <div class="col-6 knowledge-item-img p-0">
                                        <img src="{{asset($KT->image)}}" alt="">
                                    </div>
                                    <div class="col-6 knowledge-item-content">
                                        <a href="{{route('details_post',['id'=>$KT->id])}}">{{$KT->title}} </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="col-4 knowledge-list-item ">
                        <div class="row m-0">
                            <div class=" col-12 title  mb-3 bd-1">
                                <p>Dành cho người mới </p>
                            </div>
                            @foreach($KTNM as $KTNM)
                                <div class="col-12 knowledge-item d-flex ">
                                    <div class="col-6 knowledge-item-img p-0">
                                        <img src="{{asset($KTNM->image)}}" alt="">
                                    </div>
                                    <div class="col-6 knowledge-item-content">
                                        <a href="{{route('details_post',['id'=>$KTNM->id])}}">{{$KTNM->title}} </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="col-4 knowledge-list-item ">
                        <div class="row m-0">
                            <div class=" col-12 title  mb-3 bd-1">
                                <p>Kiến thức bên lề </p>
                            </div>
                            @foreach($KTBL as $KTBL)
                                <div class="col-12 knowledge-item d-flex ">
                                    <div class="col-6 knowledge-item-img p-0">
                                        <img src="{{asset($KTBL->image)}}" alt="">
                                    </div>
                                    <div class="col-6 knowledge-item-content">
                                        <a href="{{route('details_post',['id'=>$KTBL->id])}}">{{$KTBL->title}}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection
