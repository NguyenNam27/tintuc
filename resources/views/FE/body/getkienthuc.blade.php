

        @if(!$kienthuc->isEmpty())
            @foreach($kienthuc as $coin)
        <div class="row ">

                <div class="news-left-item col-12 d-flex m-t-25">
                    <div class="news-left-item-img w-25">
                        <img src="{{asset($coin->image)}}" alt="">
                    </div>
                    <div class="news-left-item-info w-75 p-r-5">
                        <a href="{{route('details_post',['id'=>$coin->id])}}">{{$coin->title}}</a>
                        <p>
                            {{strip_tags($coin->description)}}
                        </p>
                    </div>
                </div>
        </div>
{{--        {{$coin->id}}--}}
                @php($last = $coin->id)
            @endforeach
            <div class="view">
                <p data-id="{{$last}}"  id="load_more_button">
                    Xem thêm...
                </p>
            </div>
        @else
            <h1></h1>
        @endif

