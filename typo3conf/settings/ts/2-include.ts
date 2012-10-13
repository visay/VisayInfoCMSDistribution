	# Include CSS
page.includeCSS {
	file10 = http://fonts.googleapis.com/css?family=Nova+Slim|Open+Sans
	file10.external = 1
	file10.title = Standard Web Fonts
	file10.media = all
	
	file20 = fileadmin/templates/css/bootstrap.css
	file20.title = Twitter Bootstrap CSS
	file20.media = screen
	
	file30 = fileadmin/templates/css/responsive.css
	file30.title = Twitter Bootstrap Responsive CSS
	file30.media = screen
	
	file40 = fileadmin/templates/css/prettify.css
	file40.title = Google Prettify CSS
	file40.media = screen
	
	file50 = fileadmin/templates/css/visay-info.css
	file50.title = Customized CSS
	file50.media = screen
}

page.CSS_inlineStyle (
	body {
		padding-top: 60px;
		padding-bottom: 40px;
	}
	.sidebar-nav {
		padding: 9px 0;
	}
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
)