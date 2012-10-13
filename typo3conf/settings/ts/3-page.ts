tt_content.stdWrap.innerWrap >

page = PAGE
page.10 = USER
page.10.userFunc = tx_templavoila_pi1->main_page
page.10.disableExplosivePreview = 1

	# Create custom title
page.headerData.10 = TEXT
page.headerData.10 {
	field = title
	noTrimWrap = |<title>| - Keo Visay</title>|
	stdWrap.htmlSpecialChars = 1
}

	# Shortcut & Apple touch icons
page.shortcutIcon = fileadmin/templates/images/icons/favicon.ico

page.headerData.20 = TEXT
page.headerData.20.value (
	<!-- touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="fileadmin/templates/images/icons/apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="fileadmin/templates/images/icons/apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="fileadmin/templates/images/icons/apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="fileadmin/templates/images/icons/apple-touch-icon-57-precomposed.png" />
)

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