
<!--Google maps API linl-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBl9Pm3U69JBBDQov5FHIU6LyTnc8uqy3o"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--scroll animate block-->
<script src="js/wow.min.js"></script>
<!--Other main scripts-->
<script src="js/all_scr.js"></script>
<script src="js/jflickrfeed.js"></script>
<!--Bootstrap js-->  
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<!--Map js-->
<script type="text/javascript" src="js/infobox.js"></script>
<!--Slider Revolution-->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!--Parallax-->
<script type="text/javascript" src="js/jquery.parallax-0.2-min.js"></script>

<!--scroll animation-->
<script>
new WOW().init();
</script>



<!--Slider revolution settings-->
<script type="text/javascript">
jQuery(document).ready(function() {
   "use strict";
  jQuery('.tp-banner').show().revolution(
  {
    dottedOverlay:"none",
    delay:16000,
    startwidth:1170,
    startheight:700,
    hideThumbs:200,
    thumbWidth:100,
    thumbHeight:50,
    thumbAmount:5,
    navigationType:"bullet",
    navigationArrows:"solo",
    navigationStyle:"preview4",
    touchenabled:"on",
    onHoverStop:"on",
    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,
    parallax:"scroll",
    parallaxBgFreeze:"on",
    parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
    keyboardNavigation:"off",
    navigationHAlign:"center",
    navigationVAlign:"bottom",
    navigationHOffset:0,
    navigationVOffset:20,
    soloArrowLeftHalign:"left",
    soloArrowLeftValign:"center",
    soloArrowLeftHOffset:20,
    soloArrowLeftVOffset:0,
    soloArrowRightHalign:"right",
    soloArrowRightValign:"center",
    soloArrowRightHOffset:20,
    soloArrowRightVOffset:0,
    shadow:0,
    fullWidth:"on",
    fullScreen:"off",
    spinner:"spinner4",
    stopLoop:"off",
    stopAfterLoops:-1,
    stopAtSlide:-1,
    shuffle:"off",
    autoHeight:"off",           
    forceFullWidth:"off",           
    hideThumbsOnMobile:"off",
    hideNavDelayOnMobile:1500,            
    hideBulletsOnMobile:"off",
    hideArrowsOnMobile:"off",
    hideThumbsUnderResolution:0,
    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    startWithSlide:0,
    videoJsPath:"rs-plugin/videojs/",
    fullScreenOffsetContainer: "" 
  });
}); //ready
</script>

<!--Parallax house-->
<script type="text/javascript">
   "use strict";
$('.categori_block').parallax({

  'elements': [
  {
    'selector': '.categori_block',
    'properties': {
      'x': {
        'background-position-x': {
          'initial': 0,
          'multiplier': 0.1,
          'invert': true
        }
      },
      'y': {
        'background-position-y': {
          'initial': -780,
          'multiplier': 0.1,
          'invert': true
        }
      }
    }
  }
  ]
});
</script>

<script type="text/javascript">
 "use strict";
setHeiHeight(); 
$(window).resize( setHeiHeight ); 
</script>