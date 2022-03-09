<header class="w-100">
    <div class="container h-100">
        <div class="row d-flex justify-content-between align-items-center h-100">
            <div class="logo">
                <a href="<?php echo e(route('trangchu')); ?>">
                    <img src="FE/images/Artboard 2 copy.png" alt="" style="width: 100%;">
                </a>
            </div>
            <nav class="menu">
                <ul class="d-flex justify-content-between align-items-center">
                    <li><a href="<?php echo e(route('Ve-LTC')); ?>">Về LTC</a></li>
                    <li><a href="<?php echo e(route('tintuc')); ?>">Tin tức</a></li>
                    <li><a href="<?php echo e(route('noibat')); ?>">Nổi bật</a></li>
                    <li><a href="<?php echo e(route('kienthuc')); ?>">Kiến thức</a></li>
                    <li><a href="<?php echo e(route('OTC')); ?>">OTC</a></li>
                </ul>
            </nav>
            <form action="<?php echo e(route('timkiem')); ?>" method = "GET">
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
