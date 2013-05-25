// (c) 2013 Keo Visay

!function($){$(function(){var $window=$(window)
if($window.width()<=575){$('#search').addClass('nav-collapse collapse');}else{$('#search').removeClass('nav-collapse collapse');}
window.prettyPrint&&prettyPrint();$('#myCarousel').carousel();$(" #myCarousel ").swiperight(function(){$(" #myCarousel ").carousel('prev');});$(" #myCarousel ").swipeleft(function(){$(" #myCarousel ").carousel('next');});})}(window.jQuery);