<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script>

   $(document).ready(function() {
       $("#menu-toggle").click(function(e) {
           e.preventDefault();
           $("#wrapper").toggleClass("toggled");
           $("#social").slideToggle();
       });

       $('#menu-toggle > img').on({
           'click': function() {
               var src = ($(this).attr('src') === 'css/images/hamburger.jpg')
                   ? 'css/images/close.jpg'
                   : 'css/images/hamburger.jpg';
               $(this).attr('src', src);
           }
       });

       $('#change').on({
           'click': function() {
               $('body').toggleClass('on');
               $('html').toggleClass('on');
               $('.carousel-control').toggleClass('on');
               $('#sidebar-wrapper').toggleClass('on');
               $('.sidebar-nav').toggleClass('on');
               $('.sidebar-nav > li > a').toggleClass('on');
               $('.sidebar-extra > a').toggleClass('on');
           }
       });

    });

</script>
