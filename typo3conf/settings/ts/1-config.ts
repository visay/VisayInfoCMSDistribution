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