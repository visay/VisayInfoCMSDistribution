// (c) 2014 Visay.Info

!function($){$(function(){var $window=$(window)
if($window.width()<=575){$('#search').addClass('nav-collapse collapse');}else{$('#search').removeClass('nav-collapse collapse');}
window.prettyPrint&&prettyPrint();$('#myCarousel').carousel();$(" #myCarousel ").swiperight(function(){$(" #myCarousel ").carousel('prev');});$(" #myCarousel ").swipeleft(function(){$(" #myCarousel ").carousel('next');});if($('#comments .activate').length>0){loadComments('comments','visay');}
$('.tx-football-manager #player-selected').on('change',function(){$('.tx-football-manager #player-filter').submit();});})}(window.jQuery);function loadComments(container_id,shortname,identifier,developer){window.disqus_container_id=container_id;window.disqus_developer=developer?1:0;window.disqus_shortname=shortname;if(identifier)window.disqus_identifier=identifier;(function(){var dsq=document.createElement('script');dsq.type='text/javascript';dsq.async=true;dsq.src='http://'+shortname+'.disqus.com/embed.js';(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(dsq);})();}