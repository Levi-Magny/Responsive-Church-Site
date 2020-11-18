$(document).ready(function(){
    $('#Logo').mouseover(function(){
        $(this).addClass('efeito');
    }).mouseout(function(){
        $(this).removeClass('efeito')
    });

    owl = $('.info');
    owl.owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        items: 1,
        center: true
    });
    $('#btn-menu').click(function(){
        if($('header').hasClass("open-menu")){
            $('header').removeClass("open-menu");
        }else{
            $('header').addClass("open-menu");
        }
    });
    $('.close-menu .btn-close, #menu-mobile-mask').click(function(){
        $('header').removeClass("open-menu");
    });
    $('#page-up').on("click", function(event){
		$('html, body').animate({
			scrollTop:0
		}, 1000);
		event.preventDefault();
    });

});