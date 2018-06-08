$(document).ready(function() {

    var controller = new ScrollMagic.Controller();    

    var scene = new ScrollMagic.Scene({
        triggerElement: ".trigger-0", 
        duration: 800
    }).setTween(".header_wrapper", {
        height: "80px", 
        overflow:"hidden", 
        background:"rgba(230,230,230,0.9)"
    }).addTo(controller);
    var scene = new ScrollMagic.Scene({triggerElement: ".trigger-0", duration: 700}).setTween(".header", {marginTop:"0px"}).addTo(controller);
});