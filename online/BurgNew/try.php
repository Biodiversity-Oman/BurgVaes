<div class="container">

    <div class="row">
        <div class="col-md-3">
            <div class="thumbnail">
                <div class="caption">
                    <h4>Thumbnail Headline</h4>

                    <p>short thumbnail description</p>

                    <p><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>
                        <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a></p>
                </div>
                <img src="http://lorempixel.com/400/300/sports/1/" alt="...">
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail">
                    <div class="caption">
                        <h4>Thumbnail Headline</h4>

                        <p>short thumbnail description</p>

                        <p><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>
                            <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a></p>
                    </div>
                    <img src="http://lorempixel.com/400/300/sports/2/" alt="...">
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <div class="caption">
                            <h4>Thumbnail Headline</h4>

                            <p>short thumbnail description</p>

                            <p><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>
                                <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a>
                            </p>
                        </div>
                        <img src="http://lorempixel.com/400/300/sports/3/" alt="...">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption">
                                <h4>Thumbnail Headline</h4>

                                <p>short thumbnail description</p>

                                <p><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>
                                    <a href="" class="label label-default" rel="tooltip"
                                       title="Download now">Download</a></p>
                            </div>
                            <img src="http://lorempixel.com/400/300/sports/4/" alt="...">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

$("[rel='tooltip']").tooltip();

$('.thumbnail').hover(
function(){
$(this).find('.caption').fadeIn(250); //.fadeIn(250)
},
function(){
$(this).find('.caption').fadeOut(250); //.fadeOut(205)
}
);


body {
padding-top: 50px;
}

.thumbnail {
position:relative;
overflow:hidden;
}

.thumbnail .caption {
position:absolute;
top:0;
right:0;
background:rgba(66, 139, 202, 0.75);
width:100%;
height:100%;
padding:2%;
display: none;
text-align:center;
color:#fff !important;
z-index:2;
}