config {
	extTarget =

		// Indexed Search 
	index_enable = 1
	index_externals = 1
	index_metatags = 1

		// Administrator settings
	admPanel = 0
	debug = 0
	doctype = html5
	htmlTag_setParams = none

		// Character sets
	renderCharset = utf-8
	metaCharset = utf-8

		// Cache settings
	cache_period = 43200
	sendCacheHeaders = 1

		// URL Settings
	tx_realurl_enable = 1
	simulateStaticDocuments = 0
	linkVars = L(1)
	sys_language_uid = 0
	sys_language_overlay = 1
	sys_language_mode = content_fallback
	language = en
	locale_all = en_US.UTF-8
	htmlTag_langKey = en

		// Link settings
	absRefPrefix = /
	prefixLocalAnchors = all

		// Remove targets from links
	intTarget =

		// Code cleaning
	disablePrefixComment = 1

		// Move default CSS and JS to external file 
	removeDefaultJS = external 
	inlineStyle2TempFile = 1
	moveJsFromHeaderToFooter = 1

	noPageTitle = 2

		// Protect mail addresses from spamming
	spamProtectEmailAddresses = -3 
	spamProtectEmailAddresses_atSubst = @<span style="display:none;">remove-this.</span>

	headerComment =  TYPO3 Implementation by Visay Keo <keo@visay.info>
}

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

	# Include LESS
page.headerData.20 = TEXT
page.headerData.20.value (
	<link href='http://fonts.googleapis.com/css?family=Nova+Slim|Open+Sans' rel='stylesheet' type='text/css'>
	<link href="fileadmin/templates/bootstrap/less/bootstrap.less" rel="stylesheet/less" />

	<style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
		.sidebar-nav {
			padding: 9px 0;
		}
	</style>

	<link href="fileadmin/templates/bootstrap/less/responsive.less" rel="stylesheet/less" />
	<link href="fileadmin/templates/styles/visay-info.less" rel="stylesheet/less" />
	<link href="fileadmin/templates/styles/prettify.css" rel="stylesheet" />

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- fav and touch icons -->
	<link rel="shortcut icon" href="fileadmin/templates/images/icons/favicon.ico" />
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

plugin.tx_cssstyledcontent._CSS_DEFAULT_STYLE >
plugin.tx_felogin_pi1._CSS_DEFAULT_STYLE >

<INCLUDE_TYPOSCRIPT: source="FILE: EXT:sr_feuser_register/static/css_styled/setup.txt">

plugin.tx_felogin_pi1.templateFile = fileadmin/templates/plugins/tx_felogin_pi1.html

lib.topMenu = HMENU
lib.topMenu {
	special = directory
	special.value = 9

	1 = TMENU
	1 {
		wrap = <ul class="nav">|</ul>
		noBlur = 1

		NO = 1
		NO {
			ATagTitle.field = title // nav_title
			stdWrap.htmlSpecialChars = 1
			wrapItemAndSub = <li>|</li> |*| <li>|</li> |*| <li>|</li>
			stdWrap.wrap = <i class="icon-home"></i>&nbsp;| |*| |*|
			accessKey = 1
		}

		ACT < .NO
		ACT {
			wrapItemAndSub = <li class="active">|</li> |*| <li class="active">|</li> |*| <li class="active">|</li>
			stdWrap.wrap = <i class="icon-home icon-white"></i>&nbsp;| |*| |*|
		}
	}
}

lib.accountMenu = COA_INT
lib.accountMenu {
	10 = HMENU
	10 {
		special = list
		special.value = 12

		1 = TMENU
		1 {
			noBlur = 1

			NO {
				ATagTitle.field = title // nav_title
				stdWrap.htmlSpecialChars = 1
				wrapItemAndSub = <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user"></i>&nbsp;|&nbsp;<span class="caret"></span></a>
				accessKey = 1
				doNotLinkIt = 1
			}
		}
	}

	20 = COA
	20 {
		wrap = <ul class="dropdown-menu">|</ul>

		10 = HMENU
		10 {
			special = directory
			special.value = 12

			1 = TMENU
			1 {
				noBlur = 1

				NO = 1
				NO {
					ATagTitle.field = title // nav_title
					stdWrap.htmlSpecialChars = 1
					wrapItemAndSub = <li>|</li>
					accessKey = 1
				}

				SPC = 1
				SPC {
					wrapItemAndSub = <li class="divider">|</li>
				}
			}
		}
	}
}

[loginUser = *]
	lib.accountMenu { 
		10 >
		10 = COA
		10 {
			10 = TEXT
			10.data = TSFE:fe_user|user|first_name
			10.required = 1
	
			20 = TEXT
			20.data = TSFE:fe_user|user|last_name
			20.wrap = &nbsp;|
			20.required = 1
	
			stdWrap.wrap = <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user icon-white"></i>&nbsp;|&nbsp;<span class="caret"></span></a>
			stdWrap.required = 1
		}
	
		20 {
			10.special.value = 16
			10.excludeUidList = 18
	
			20 = HMENU
			20 {
				special = list
				special.value = 18
	
				1 = TMENU
				1 {
					noBlur = 1
	
					NO {
						ATagTitle.field = title // nav_title
						stdWrap.htmlSpecialChars = 1
						wrapItemAndSub = <li>|</li>
						stdWrap.typolink.parameter = 13
						stdWrap.typolink.additionalParams.dataWrap = &logintype=logout&pid=19
						accessKey = 1
						doNotLinkIt = 1
					}
				}
			}
		}
	}
[end]

lib.search = TEXT
lib.search {
	stdWrap {
		typolink.parameter = 22
		typolink.returnLast = url
	}

	dataWrap (
		<form class="navbar-search pull-right" action="|" method="post">
			<input type="text" name="tx_indexedsearch[sword]" class="search-query" placeholder="Search">
		</form>
	)

	insertData = 1
}

lib.navBar = HMENU
lib.navBar {
	special = directory
	special.value = 23

	1 = TMENU
	1 {
		wrap = <ul class="nav nav-list">|</ul>
		noBlur = 1

		NO = 1
		NO {
			ATagTitle.field = title // nav_title
			stdWrap.htmlSpecialChars = 1
			wrapItemAndSub = <li>|</li>
			stdWrap.innerWrap = <i class="icon-camera"></i>&nbsp;|
			accessKey = 1
		}

		ACT = 1
		ACT < .NO
		ACT {
			wrapItemAndSub = <li class="active">|</li>
			stdWrap.innerWrap = <i class="icon-camera icon-white"></i>&nbsp;|
		}

		SPC = 1
		SPC < .NO
		SPC {
			wrapItemAndSub = <li class="nav-header"><i class="icon-eye-open icon-white"></i>&nbsp;|</li>
			stdWrap.innerWrap >
		}
	}
}

lib.footer = HTML
lib.footer.value (
	<p class="pull-right"><a href="#"><i class="icon-hand-up"></i> Back to top</a></p>
	<p><i class="icon-thumbs-up"></i> Powered by TYPO3 CMS v4. TYPO3 .... inspiring people to share! Get involved: <a target="_blank" href="http://typo3.org">http://typo3.org</a>.</p>
	<p><i class="icon-thumbs-up"></i> Built with <a target="_blank" href="http://twitter.github.com/bootstrap">Bootstrap</a>, from <a target="_blank" href="http://twitter.com">Twitter</a>. Simple and flexible HTML, CSS, and Javascript for popular user interface components and interactions.</p>
	<p><i class="icon-thumbs-up"></i> Integration by Visay Keo, Certified TYPO3 Integrator. Follow me <a target="_blank" href="http://twitter.com/visay">@visay</a>.</p>
)