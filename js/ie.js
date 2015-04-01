/* IE specific javascript*/
$(document).ready(function(){
    
    // call correction function on page load
    alignCarouselCaption();

    // call correction function if window is resized
    $(window).resize(function(){
        alignCarouselCaption();
    });
    
    // function to correct text alignment because transforms don't work in IE
    function alignCarouselCaption()
    {
        var textWidth = $(".fifthcaptiontext").width();
        var textHeight = $(".fifthcaptiontext").height();
        $(".fifthcaptiontext").css("margin-left", 0-textWidth/2, "margin-top", 0-textHeight/2);
    }
    
});