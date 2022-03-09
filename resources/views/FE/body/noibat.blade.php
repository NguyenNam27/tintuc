@extends('FE.master.layout_noibat')
@section('noibat')
    <section>
        <div class="main">
            <div class="container m-b-5">
                <div class="title bg">
                    <p>Nổi bật</p>
                </div>
                <div class="row main-content">
                    <div class="col-12 h-100 ">

                        <div class=" w-100 news-same hightlights">
                            @foreach($noibat as $noi)
                                <div class=" news-same-img hightlights-img">
                                    <img src="{{asset($noi->image)}}" alt="" style="width: 100%;">
                                </div>
                                <div class=" w-100 news-same-info hightlights-info">
                                    <a href="{{route('details_post',['id'=>$noi->id])}}">{{$noi->title}}</a>
                                    <span>{{strip_tags($noi->description)}}</span>
                                    <div class="  d-flex align-items-center news-same-icon hightlights-icon mt-3"
                                         style="width: 1.2rem;">
                                        <img src="FE/images/credit-card.png" alt="" class="w-100 mr-2">
                                        <span>00/00/2021</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="row main-content-list-item d-flex justify-content-between mt-5"
                         style="padding: 0 2rem;">

{{--                        @foreach($post as $post2)--}}
{{--                            <div class="hightlights-item col-3 ">--}}
{{--                                <div class="hightlights-item-img w-100">--}}
{{--                                    <img src="{{asset($post2->image)}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="hightlights-item-info w-100">--}}
{{--                                    <a href="#">{{$post2->title}}</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
                    </div>
                </div>
                @csrf
                <div id="view">

                </div>

            </div>
        </div>
    </section>

@endsection
@section('js_xemthem')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            var token = $('input[name="_token"]').val();
            load_more('',token);
            function load_more(id = "",token){
                $.ajax({
                    url:'{{route('load_more_data')}}',
                    method:'POST',
                    data:{id:id, _token : token},
                    success:function (data)
                    {
                        $('#load_more_button').remove();
                        $('#view').append(data);
                    }
                })
            }
            $(document).on('click', '#load_more_button', function(){
                var id = $(this).data('id');

                $('#load_more_button').html('<b>Loading...</b>');
                load_more(id,token);
            });
        });



    </script>
@endsection


