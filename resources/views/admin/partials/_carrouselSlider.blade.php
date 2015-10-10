<div id="slider_carroussel" class="slider_carroussel_container col-md-12 col-sm-12">
    <div u="loading" class="loading">
        <i class="fa fa-spinner fa-pulse fa-2x text-verde"></i>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <!-- Arrow Left -->
        <span u="arrowleft" class="jssora15l fa fa-caret-left fa-2x">
        </span>
            <!-- Arrow Right -->
        <span u="arrowright" class="jssora15r fa fa-caret-right fa-2x">
        </span>
            <!--#endregion Arrow Navigator Skin End -->
        </div>
    </div>

    <div u="slides" class="slider_carroussel_slides col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 ">
        @forelse($fotos as $foto)
            <div class="slider_carroussel_slide col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img u="image" src="{!!  URL::asset($foto->path) !!}">
            </div>
        @empty
            <div class="alert alert-info">
                <h3>No hay fotos en esta galería!</h3>
            </div>
        @endforelse
    </div>
</div>

<script>
    $(function () {
        var jssor_slider1 = new $JssorSlider$('slider_carroussel', {
            $AutoPlay         : true,                     //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $AutoPlaySteps    : 4,                        //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $AutoPlayInterval : 4000,                     //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover     : 1,                        //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation   : true,                 //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            $SlideDuration        : 160,                  //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide : 20,                   //[Optional] Minimum drag offset to trigger slide , default value is 20
            $SlideWidth           : 200,                  //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 150,                          //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing         : 3,                    //[Optional] Space between each slide in pixels, default value is 0
            $DisplayPieces        : 4,                    //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            $ParkingPosition      : 0,                    //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            $UISearchMode         : 1,                    //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation      : 1,                    //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation      : 1,                    //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $ArrowNavigatorOptions : {
                $Class        : $JssorArrowNavigator$,    //[Requried] Class to create arrow navigator instance
                $ChanceToShow : 2,                        //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter   : 0,                        //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps        : 4                         //[Optional] Steps to go for each navigation request, default value is 1
            }
        });

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales
        //while window resizes
        function ScaleSlider() {
            var parentWidth = $('#slider_carroussel').parent().width();
            if (parentWidth) {
                jssor_slider1.$ScaleWidth(parentWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        //Scale slider after document ready
        ScaleSlider();

        //Scale slider while window load/resize/orientationchange.
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>