<div class="row main-content-list-item d-flex justify-content-between mt-5" style="padding: 0 2rem;">
@if(!$data->isEmpty())
        @php($i = 0)
        @foreach($data as $row)
        <div class="hightlights-item col-3"  >

                <div class="hightlights-item-img w-100">
                    <img src="{{asset($row->image)}}" alt="">
                </div>
                <div class="hightlights-item-info w-100">
                    <a href="{{route('details_post',['id'=>$row->id])}}">{{$row->title}}</a>
                </div>
                @php($lastID = $row->id)
                @php($i++)

        </div>
        @endforeach
</div>
    @if($i>1)
        <div class="view">
            <p data-id="{{$lastID}}" id="load_more_button">
                Xem thêm...
            </p>
        </div>
    @endif
@else
    <h1></h1>
@endif


