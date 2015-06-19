<!DOCTYPE html>
<html lang="en">

<?php
include_once 'header.php';
?>


<body>
<div id="wrapper">
    <?php
    include_once'navigation.php';
    ?>
    <section>
        <div class="divider2">&nbsp;</div>
    </section>
    <div class="row">
        <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
        <!-- Please call pinit.js only once per page -->
        <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
        <div class="col-md-6 col-md-offset-3">
            <div id="slider" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                    <div class="item active">
                        <img src="css/images/ronald&simone/1%20Ronald%20en%20Simone.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="item">
                        <img src="css/images/ronald&simone/2%20Ronald%20en%20Simone.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="item">
                        <img src="css/images/ronald&simone/3%20Ronald%20en%20Simone.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="item">
                        <img src="css/images/ronald&simone/4%20Ronald%20en%20Simone.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="item">
                        <img src="css/images/ronald&simone/5%20Ronald%20en%20Simone.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="item">
                        <img src="css/images/ronald&simone/6%20Ronald%20en%20Simone.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="item">
                        <img src="css/images/ronald&simone/7%20Ronald%20en%20Simone.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="item">
                        <img src="css/images/ronald&simone/8%20Ronald%20en%20Simone.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="item">
                        <img src="css/images/ronald&simone/9%20Ronald%20en%20Simone.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="item">
                        <img src="css/images/ronald&simone/10%20Ronald%20en%20Simone.jpg" class="img-responsive" alt="">
                    </div>

                </div>
                <a class="carousel-control left" href="#slider" data-slide="prev"><i
                        class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="carousel-control right" href="#slider" data-slide="next"><i
                        class="glyphicon glyphicon-chevron-right"></i></a>

            </div>
        </div>

    </div>
    <!--End Slider-->

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="text-center">woning Ronald & Simone</h3>

            <p></p>
        </div>
    </div>
</div>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sidr.min.js"></script>

<script>
    $(document).ready(function() {

        $('#simple-menu').sidr({
            onOpen: function(){
                $('.glyphicon').removeClass('glyphicon-th-list').addClass('glyphicon-remove');
            },
            onClose: function(){
                $('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-th-list');
            }
        });
    });
</script>


</body>
</html>
