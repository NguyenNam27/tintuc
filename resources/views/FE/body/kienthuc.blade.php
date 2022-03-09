@extends('FE.master.layout_kienthuc')
@section('kienthuc')
    <section>
        <div class="main">
            <div class="container mb-8">
                <div class="title bg ">
                    <p>Kiến thức</p>
                </div>
                <div class="news-menu">
                    <ul class="d-flex m-0">
                        @foreach($kienthuc as $kien)
                        <li class="active" ><a href="{{route('KT',['id'=>$kien->id])}}" style="color: black">{{$kien->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="row ">

                    <div class="col-9 news-left">
                        @csrf
                        <div id="post_data">

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
@section('js_kienthuc')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var token = $('input[name="_token"]').val();
            // alert(token);
            load_kienthuc('',token)
            function load_kienthuc(id="",token){
                $.ajax({
                    url:'{{route('load_kienthuc')}}',
                    method:'POST',
                    data:{id:id,_token:token},
                    success:function(data){
                        $('#load_more_button').remove();
                        $('#post_data').append(data);
                        // console.log(data);
                    }
                });

            }
            $(document).on('click', '#load_more_button', function(){
                var id = $(this).data('id');
                // alert(id);
                $('#load_more_button').html('<b>Loading...</b>');
                load_kienthuc (id,token);
            });


        })
    </script>
@endsection
