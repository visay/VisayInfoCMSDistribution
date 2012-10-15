page = PAGE
page.10 = USER
page.10.userFunc = tx_templavoila_pi1->main_page
page.10.disableExplosivePreview = 1

	# Shortcut & Apple touch icons
page.shortcutIcon = fileadmin/templates/images/icons/favicon.ico

	# Include CSS
page.includeCSS {
	file1 = fileadmin/templates/styles/bootstrap.css
	file2 = fileadmin/templates/styles/responsive.css
	file3 = http://fonts.googleapis.com/css?family=Nova+Slim|Open+Sans
	file3.external = 1
	file4 = fileadmin/templates/styles/prettify.css
	file5 = fileadmin/templates/styles/visay-info.css
}

page.includeJSFooterlibs {
	jquery = http://code.jquery.com/jquery-1.8.1.min.js
	jquery.external = 1
	jquery.forceOnTop = 1
#	jquery.disableCompression = 1
#	jquery.excludeFromConcatenation = 1

	transition = fileadmin/templates/bootstrap/js/bootstrap-transition.js
	dropdown = fileadmin/templates/bootstrap/js/bootstrap-dropdown.js
	carousel = fileadmin/templates/bootstrap/js/bootstrap-carousel.js
	collapse = fileadmin/templates/bootstrap/js/bootstrap-collapse.js
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
	noTrimWrap = |<title>| - Keo Visay</title>|
	stdWrap.htmlSpecialChars = 1
}

# Description
page.meta.description = Personal information about me <Visay Keo>, my recent activities and tips/tricks I often need but always forget. I hope this can also help others working in similar area of TYPO3, Web Development and Project Management. 
page.meta.description {
	override.field = description
}

# Keywords
page.meta.keywords = visay, keo, visay keo, typo3, typoscript, flow, typo3flow, extbase, fluid, neos, php, database, web server, web, web development, developer, web developer, project manager, project management, cambodia, khmer, typo3 cambodia, ktug, typo3 usergroup, khmer typo3 usergroup
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