<header class="w-100">
    <div class="container h-100">
        <div class="row d-flex justify-content-between align-items-center h-100">
            <div class="logo">
                <a href="{{route('trangchu')}}">
                    <img src="FE/images/Artboard 2 copy.png" alt="" style="width: 100%;">
                </a>
            </div>
            <nav class="menu">
                <ul class="d-flex justify-content-between align-items-center">
                    <li><a href="{{route('Ve-LTC')}}">Về LTC</a></li>
                    <li><a href="{{route('tintuc')}}">Tin tức</a></li>
                    <li><a href="{{route('noibat')}}">Nổi bật</a></li>
                    <li><a href="{{route('kienthuc')}}">Kiến thức</a></li>
                    <li><a href="{{route('OTC')}}">OTC</a></li>
                </ul>
            </nav>
            <form action="{{route('timkiem')}}" method = "GET">
                <div class="search ">
                    <div class="search-icon">
                        <img src="FE/images/search.png" alt="">
                    </div>
                    <input type="text" name="key_words" placeholder="Tìm kiếm" class="search-input">
                    <input type="submit"  value="tìm kiếm">
                </div>
            </form>

        </div>
    </div>
</header>
