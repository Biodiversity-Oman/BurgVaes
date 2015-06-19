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