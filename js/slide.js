$(function(){
	
	var curSlide = 0;
	var box = $('.depoimentos-box-single');
	var dots = $('.depoimentos-dots div');
	var maxSlide = box.length - 1;
	var dotsActive = dots.length -1;


	initSlide();

	changeSlide();


	function initSlide(){

		box.hide();

		box.eq(0).show();

		dots.eq(0).addClass('dots-active')

	}


	function changeSlide(){

		setInterval(function() {
			
			box.eq(curSlide).fadeOut(1000);
			dots.eq(curSlide).removeClass('dots-active')

			curSlide++;

			if(curSlide > maxSlide){

				curSlide = 0;

			}

			box.eq(curSlide).fadeIn(1000);
			dots.eq(curSlide).addClass('dots-active')

		}, 6000)

	}


})