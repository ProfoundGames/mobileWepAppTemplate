<script src="js/idangerous.swiper.js" type="text/javascript"></script>
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<link href="global.css" rel="stylesheet" type="text/css"/>
<script src="js/slideOptions.js" type="text/javascript"></script>
<script src="js/cookie.js" type="text/javascript"></script>
<script src="js/jquery.cookie.js" type="text/javascript"></script>
<script src="js/menu.js" type="text/javascript"></script>

<script type="text/javascript">
/*======
Use document ready or window load events
For example:
With jQuery: $(function() { ...code here... })
Or window.onload = function() { ...code here ...}
Or document.addEventListener('DOMContentLoaded', function(){ ...code here... }, false)
=======*/

var mySwiper;

window.onload = function() {
    mySwiper = new Swiper('.swiper-container',{
        //Your options here:
        mode:'horizontal',
        loop: false,
        speed: 250
        //etc..
    });  
};


</script>