$(document).ready(function(){
    $('.menuIcon').on('click', function(){
        if (mySwiper.activeIndex === 0) {
            mySwiper.swipeTo(1);
        }
        else {
            mySwiper.swipeTo(0);
        }
    });
});