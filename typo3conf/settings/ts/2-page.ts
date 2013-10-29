page = PAGE

	# Google analytics settings
page.5 = TEXT
page.5.value (
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-42523446-1', 'visay.info');
		ga('send', 'pageview');

	</script>
)

	# Page content from templavoila
page.10 = USER
page.10.userFunc = tx_templavoila_pi1->main_page
page.10.disableExplosivePreview = 1

	# Shortcut & Apple touch icons
page.shortcutIcon = fileadmin/templates/images/icons/favicon.ico

	# Include CSS
page.includeCSS {
	file1 = http://fonts.googleapis.com/css?family=Nova+Slim|Open+Sans
	file1.external = 1
	file1.forceOnTop = 1
	file1.disableCompression = 1
	file1.excludeFromConcatenation = 1
	file2 = fileadmin/templates/styles/bootstrap.css
	file3 = fileadmin/templates/styles/responsive.css
	file4 = fileadmin/templates/styles/prettify.css
	file5 = fileadmin/templates/styles/visay-info.css
}

page.includeJSFooterlibs {
	jquery = http://code.jquery.com/jquery-1.9.1.min.js
	jquery.external = 1
	jquery.forceOnTop = 1
	jquery.disableCompression = 1
	jquery.excludeFromConcatenation = 1

	jquery-mobile = fileadmin/templates/scripts/jquery.mobile.custom.min.js
	transition = fileadmin/templates/bootstrap/js/bootstrap-transition.js
	dropdown = fileadmin/templates/scripts/bootstrap-dropdown.js
	carousel = fileadmin/templates/bootstrap/js/bootstrap-carousel.js
	collapse = fileadmin/templates/bootstrap/js/bootstrap-collapse.js
	modal = fileadmin/templates/bootstrap/js/bootstrap-modal.js
	prettifier = fileadmin/templates/scripts/prettify.js
}

page.includeJSFooter {
	file1 = fileadmin/templates/scripts/visay-info.js
}

page.headerData.10 = TEXT
page.headerData.10.value (
	<style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
		.sidebar-nav {
			padding: 9px 0;
		}
	</style>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="fileadmin/templates/images/icons/apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="fileadmin/templates/images/icons/apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="fileadmin/templates/images/icons/apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="fileadmin/templates/images/icons/apple-touch-icon-57-precomposed.png" />
)

	# Create custom title
page.headerData.20 = TEXT
page.headerData.20 {
	field = subtitle // title
	noTrimWrap = |<title>| - Visay.Info</title>|
	stdWrap.htmlSpecialChars = 1
}

# Description
page.meta.description = Visay.Info manages the schedule of អេតចាយ United football team's matches. Additionally with some tips and tricks Visay needs for his daily work that relate with web development and TYPO3. And lastly, some photos from his short trips around.
page.meta.description {
	override.field = description
}

# Keywords
page.meta.keywords = visay, keo, visay keo, football, soccer, typo3, typoscript, flow, typo3flow, extbase, fluid, neos, php, database, web server, web, web development, developer, web developer, project manager, project management, agile, scrum, kanban, cambodia, khmer, typo3 cambodia, ktug, typo3 usergroup, khmer typo3 usergroup
page.meta.keywords {
	stdWrap.case = lower
	override.field = keywords
}

# Author
page.meta.author = Visay Keo
page.meta.author {
	override.field = author
}

# Portable view
page.meta.viewport = width=device-width, initial-scale=1.0
page.meta.viewport {
	override.field = viewport
}