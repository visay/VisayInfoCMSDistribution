!function ($) {
	$(function(){

		var $window = $(window)

		if ($window.width() <= 575) {
			$('#search').addClass('nav-collapse collapse');
		} else {
			$('#search').removeClass('nav-collapse collapse');
		}

			// make code pretty
		window.prettyPrint && prettyPrint();
			// carousel demo
		$('#myCarousel').carousel();

			// swipe slideshow left/right in touch device
		$(" #myCarousel ").swiperight(function() {
			$(" #myCarousel ").carousel('prev');
		});
		$(" #myCarousel ").swipeleft(function() {
			$(" #myCarousel ").carousel('next');
		});
	})
}(window.jQuery);