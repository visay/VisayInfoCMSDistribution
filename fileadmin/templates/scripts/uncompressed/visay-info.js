!function ($) {
	$(function () {

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
		$(" #myCarousel ").swiperight(function () {
			$(" #myCarousel ").carousel('prev');
		});
		$(" #myCarousel ").swipeleft(function () {
			$(" #myCarousel ").carousel('next');
		});

		// Onclick activate comment, load disqus comment function
		//$('#comments .activate').click(function(e) {
		if ($('#comments .activate').length > 0) {
			//e.preventDefault();
			loadComments('comments', 'visay');
		//});
		}

		// Filter the player list on selection change
		$('.tx-football-manager #player-selected').on('change', function () {
			$('.tx-football-manager #player-filter').submit();
		});
	})
}(window.jQuery);

/**
 * Function to load disqus comment form
 * @param container_id
 * @param shortname
 * @param identifier
 * @param developer
 */
function loadComments(container_id, shortname, identifier, developer) {
	// CONFIGURATION VARIABLES
	window.disqus_container_id = container_id;
	window.disqus_developer = developer ? 1 : 0;
	window.disqus_shortname = shortname; // required
	if (identifier) window.disqus_identifier = identifier;

	// DON'T EDIT BELOW THIS LINE
	(function () {
		var dsq = document.createElement('script');
		dsq.type = 'text/javascript';
		dsq.async = true;
		dsq.src = 'http://' + shortname + '.disqus.com/embed.js';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	})();
}