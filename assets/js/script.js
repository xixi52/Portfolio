$(document).ready(function () {
    if ($(window).width() < 1250) $("#leftbox").removeClass("active");
    else $("#leftbox").addClass("active");
    
    $("#expand-info").click(function(){
        if ($("#leftbox").hasClass("active")) $("#leftbox").removeClass("active");
        else $("#leftbox").addClass("active");
    });

    $(window).resize(function() {
        if ($(window).width() < 1250) $("#leftbox").removeClass("active");
        else $("#leftbox").addClass("active");
    });
});