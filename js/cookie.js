$(document).ready(function(){
    if ($.cookie("visited") !== "true") {
        $('.overlay').addClass('active');
    };

    $('.overlay').on('click', function(){
        $.cookie("visited", "true");
        $('.overlay').removeClass('active');
    });

    $('.removeCookie').on('click', function(){
        $.removeCookie("visited");
    });
});