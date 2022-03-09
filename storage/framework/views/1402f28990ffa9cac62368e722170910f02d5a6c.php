<?php $__env->startSection('noibat'); ?>
    <section>
        <div class="main">
            <div class="container m-b-5">
                <div class="title bg">
                    <p>Nổi bật</p>
                </div>
                <div class="row main-content">
                    <div class="col-12 h-100 ">
                        <div class=" w-100 news-same hightlights">
                            <div class=" news-same-img hightlights-img">
                                <img src="FE/images/coin.jpg" alt="" style="width: 100%;">
                            </div>
                            <div class=" w-100 news-same-info hightlights-info">
                                <a href="#">Quỹ ETF Bitcoin đầu tiên tại Mỹ sẽ niêm yết Sàn chứng khoán New York vào
                                    ngày 19/10</a>
                                <span>Quỹ ETF Bitcoin đầu tiên tại Mỹ của ProShares được xác nhận sẽ niêm yết Sàn chứng
                                    khoán New York vào ngày 19/10</span>
                                <div class="  d-flex align-items-center news-same-icon hightlights-icon mt-3"
                                     style="width: 1.2rem;">
                                    <img src="FE/images/credit-card.png" alt="" class="w-100 mr-2">
                                    <span>00/00/2021</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row main-content-list-item d-flex justify-content-between mt-5" style="padding: 0 2rem;">
                        <div class="hightlights-item col-3 ">
                            <div class="hightlights-item-img w-100">
                                <img src="FE/images/coin.jpg" alt="">
                            </div>
                            <div class="hightlights-item-info w-100">
                                <a href="#">Kyros Kompass #5: Bitcoin và DeFi-"Cú hích" nào cho cả hai?</a>
                            </div>
                        </div>

                    </div>

                </div>
                <?php echo csrf_field(); ?>
                <div id="postData">

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_xemthem'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">


        
        

        
        
        
        
        
        

        
        


        
        $(document).ready(function () {
            var token = $('input[name="_token"]').val();
            load_more('',token);
            function load_more(id = "",token){
                $.ajax({
                    url:'<?php echo e(route('load_more_data')); ?>',
                    method:'POST',
                    data:{id:id, _token : token},
                    success:function (data)
                    {

                        $('#load_more_button').remove();
                        $('#postData').append(data);
                    }
                })
            }
            $(document).on('click', '#load_more_button', function(){
                var id = $(this).data('id');
                $('#load_more_button').html('<b>Loading...</b>');
                load_more(id,token);
            });
        })



    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('FE.master.layout_noibat', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>