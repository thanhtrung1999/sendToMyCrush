$(document).ready(function() {
	new WOW().init();
	$('.logo-header-content').addClass('heartBeat animated');

	$('.list-image li a').fancybox();

	$(window).scroll(function(event) {
		var pos_body = $('html, body').scrollTop(); 
		var pos_loveStory = $('.lovestory-main').offset().top;

		if(pos_body>$(window).height()){
			$('.back-to-top').addClass('show-btn');
			$('.logo-header').addClass('sticky-top').addClass('tada animated');
		}else{
			$('.back-to-top').removeClass('show-btn');
			$('.logo-header').removeClass('sticky-top');
			$('.logo-header').removeClass('tada animated');
		}
	});

	$('.back-to-top').click(function(event) {
		$('html,body').animate({scrollTop:0},800);
	});

});