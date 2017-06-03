(function($) {



$().ready(function() {   

		$('.front #myCarousel .item:nth-child(1)').addClass('active');     
		$('.front #thumbcarousel .carousel-inner .item:nth-child(1)').addClass('active');     

		$('.front #bemvindo .item').click(function(){
			$(this).toggleClass('toggled');
		});

});



})(jQuery);
