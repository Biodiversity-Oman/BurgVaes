<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sidr.min.js"></script>
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>

<script>

    $(document).ready(function() {

        $('#simple-menu').sidr({

            onOpen: function(){
                document.getElementById("socialSymbol").style.visibility = "hidden";

            },
            onClose: function(){
                document.getElementById("socialSymbol").style.visibility = "visible";
            }
        });

        //$("#hamburger").attr("src","css/images/hamburger.jpg");
        $('#simple-menu > img').on({
            'click': function() {
                var src = ($(this).attr('src') === 'css/images/hamburger.jpg')
                    ? 'css/images/close.jpg'
                    : 'css/images/hamburger.jpg';
                $(this).attr('src', src);
            }
        });

    });


</script>
