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

[globalVar = TSFE:id = 2]
	lib.topMenu.alwaysActivePIDlist = 5
[end]

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
				wrapItemAndSub = <a class="btn dropdown-toggle" data-toggle="dropdown" href="#" id="account"><i class="icon-user"></i>&nbsp;|&nbsp;<span class="caret"></span></a>
				accessKey = 1
				doNotLinkIt = 1
			}
		}
	}

	20 = COA
	20 {
		wrap = <ul class="dropdown-menu" role="menu" aria-labelledby="account">|</ul>

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
					ATagParams = tabindex="-1"
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
	
			stdWrap.wrap = <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#" id="account"><i class="icon-user icon-white"></i>&nbsp;|&nbsp;<span class="caret"></span></a>
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
						ATagParams = tabindex="-1"
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