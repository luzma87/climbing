<div id="slider_banner" class="slider_banner_container col-md-12 col-sm-12">
    <!-- Loading Screen -->
    <div u="loading" class="loading">
        <i class="fa fa-spinner fa-pulse fa-2x text-verde"></i>
    </div>

    <!-- Slides Container -->
    <div u="slides" class="slider_banner_slides col-md-12 col-sm-12">

        @forelse($fotos as $foto)
            <div>
                <img u="image" src="{!!  URL::asset($foto->path) !!}">

                <div u="caption" class="slider_banner_caption col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1" t="caption-transition-name">
                    {{ getTituloFoto($foto->id, session("lang"), "Sin título") }}
                </div>
            </div>
        @empty
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 alert alert-info">
                <h3>No hay fotos en esta galería!</h3>
            </div>
        @endforelse
    </div>
    <!-- Navigator Skin Begin -->
    <!--#region Bullet Navigator Skin Begin -->
    <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
    <!-- bullet navigator container -->
    <div u="navigator" class="jssorb01" style="top: 70px; right: 40px;">
        <!-- bullet navigator item prototype -->
        <div u="prototype"></div>
    </div>
    <!--#endregion Bullet Navigator Skin End -->
    <!-- Navigator Skin End -->
</div>

<script>
    $(function ($) {
        var jssor_slider1 = new $JssorSlider$('slider_banner', {
            $AutoPlay               : true,
            $BulletNavigatorOptions : {                  //[Optional] Options to specify and enable navigator or not
                $Class        : $JssorBulletNavigator$,  //[Required] Class to create navigator instance
                $ChanceToShow : 2,                       //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter   : 0,                       //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps        : 1,                       //[Optional] Steps to go for each navigation request, default value is 1
                $Lanes        : 1,                       //[Optional] Specify lanes to arrange items, default value is 1
                $SpacingX     : 3,                       //[Optional] Horizontal space between each item in pixel, default value is 0
                $SpacingY     : 10,                      //[Optional] Vertical space between each item in pixel, default value is 0
                $Orientation  : 1                        //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            }
        });

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales
        //while window resizes
        function ScaleSlider() {
            var parentWidth = $('#slider_banner').parent().width();
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