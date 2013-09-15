<?php
return array(
	'BE' => array(
		'compactFlexFormXML' => '1',
		'compressionLevel' => '9',
		'disable_exec_function' => '0',
		'flexformForceCDATA' => '1',
		'loginSecurityLevel' => 'rsa',
		'versionNumberInFilename' => '1',
		'warning_email_addr' => 'keo@visay.info',
	),
	'DB' => array(
		'extTablesDefinitionScript' => 'extTables.php',
	),
	'EXT' => array(
		'extConf' => array(
			'div2007' => 'a:0:{}',
			'dropbox_carousel' => 'a:0:{}',
			'fal_dropbox' => 'a:0:{}',
			'formhandler' => 'a:0:{}',
			'indexed_search' => 'a:18:{s:8:"pdftools";s:9:"/usr/bin/";s:8:"pdf_mode";s:2:"20";s:5:"unzip";s:9:"/usr/bin/";s:6:"catdoc";s:9:"/usr/bin/";s:6:"xlhtml";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:5:"unrtf";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:18:"fullTextDataLength";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:21:"enableMetaphoneSearch";s:1:"1";s:6:"minAge";s:2:"24";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:26:"useCrawlerForExternalFiles";s:1:"0";s:11:"flagBitMask";s:3:"192";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";}',
			'linkvalidator' => 'a:0:{}',
			'news' => 'a:12:{s:29:"removeListActionFromFlexforms";s:1:"0";s:20:"pageModuleFieldsNews";s:313:"LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_advanced=title,datetime,teaser,category;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_complex=title,datetime,teaser,category,archive;";s:24:"pageModuleFieldsCategory";s:17:"title,description";s:11:"archiveDate";s:4:"date";s:13:"prependAtCopy";s:1:"1";s:6:"tagPid";s:1:"1";s:25:"showMediaDescriptionField";s:1:"0";s:22:"contentElementRelation";s:1:"0";s:13:"manualSorting";s:1:"0";s:19:"categoryRestriction";s:4:"none";s:12:"showImporter";s:1:"0";s:24:"showAdministrationModule";s:1:"1";}',
			'realurl' => 'a:5:{s:10:"configFile";s:35:"typo3conf/settings/realurl_conf.php";s:14:"enableAutoConf";s:1:"0";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
			'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
			'rtehtmlarea' => 'a:8:{s:21:"noSpellCheckLanguages";s:23:"ja,km,ko,lo,th,zh,b5,gb";s:15:"AspellDirectory";s:15:"/usr/bin/aspell";s:20:"defaultConfiguration";s:105:"Typical (Most commonly used features are enabled. Select this option if you are unsure which one to use.)";s:12:"enableImages";s:1:"0";s:20:"enableInlineElements";s:1:"0";s:19:"allowStyleAttribute";s:1:"1";s:24:"enableAccessibilityIcons";s:1:"0";s:16:"forceCommandMode";s:1:"0";}',
			'saltedpasswords' => 'a:7:{s:20:"checkConfigurationFE";s:1:"0";s:20:"checkConfigurationBE";s:1:"0";s:3:"FE.";a:5:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:38:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Md5Salt";s:11:"forceSalted";s:1:"0";s:15:"onlyAuthService";s:1:"0";s:12:"updatePasswd";s:1:"1";}s:3:"BE.";a:5:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:38:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Md5Salt";s:11:"forceSalted";s:1:"0";s:15:"onlyAuthService";s:1:"0";s:12:"updatePasswd";s:1:"1";}s:21:"checkConfigurationFE2";s:1:"0";s:21:"checkConfigurationBE2";s:1:"0";s:8:"__meta__";N;}',
			'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
			'sr_feuser_register' => 'a:3:{s:12:"uploadFolder";s:27:"uploads/tx_srfeuserregister";s:10:"imageTypes";s:30:"png, jpg, jpeg, gif, tif, tiff";s:12:"imageMaxSize";s:3:"500";}',
			'static_info_tables' => 'a:3:{s:13:"enableManager";s:1:"0";s:5:"dummy";s:1:"0";s:7:"charset";s:5:"utf-8";}',
			'templavoila' => 'a:3:{s:7:"enable.";a:3:{s:13:"oldPageModule";s:1:"0";s:19:"selectDataStructure";s:1:"0";s:15:"renderFCEHeader";s:1:"0";}s:9:"staticDS.";a:3:{s:6:"enable";s:1:"1";s:8:"path_fce";s:26:"typo3conf/settings/ds/fce/";s:9:"path_page";s:27:"typo3conf/settings/ds/page/";}s:13:"updateMessage";s:1:"0";}',
		),
		'extList' => 'extbase,css_styled_content,info,perm,func,filelist,fluid,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,t3skin,t3editor,reports,felogin,form,rsaauth,saltedpasswords,cshmanual,opendocs,recycler,scheduler,workspaces,static_info_tables,templavoila,realurl,div2007,sr_feuser_register,indexed_search,news,formhandler,adodb',
		'extListArray' => array(
			'extbase',
			'css_styled_content',
			'info',
			'perm',
			'func',
			'filelist',
			'fluid',
			'about',
			'version',
			'tsconfig_help',
			'context_help',
			'extra_page_cm_options',
			'impexp',
			'sys_note',
			'tstemplate',
			'tstemplate_ceditor',
			'tstemplate_info',
			'tstemplate_objbrowser',
			'tstemplate_analyzer',
			'func_wizards',
			'wizard_crpages',
			'wizard_sortpages',
			'lowlevel',
			'install',
			'belog',
			'beuser',
			'aboutmodules',
			'setup',
			'taskcenter',
			'info_pagetsconfig',
			'viewpage',
			'rtehtmlarea',
			't3skin',
			't3editor',
			'reports',
			'felogin',
			'form',
			'rsaauth',
			'saltedpasswords',
			'cshmanual',
			'opendocs',
			'recycler',
			'scheduler',
			'workspaces',
			'realurl',
			'sr_feuser_register',
			'indexed_search',
			'news',
			'adodb',
			'templavoila',
			'formhandler',
			'static_info_tables',
			'div2007',
			'fal_dropbox',
			'dropbox_carousel',
			'linkvalidator',
		),
		'extList_FE' => 'extbase,css_styled_content,fluid,version,install,rtehtmlarea,t3skin,felogin,form,rsaauth,saltedpasswords,workspaces,static_info_tables,templavoila,realurl,div2007,sr_feuser_register,indexed_search,news,formhandler',
	),
	'EXTCONF' => array(
		'lang' => array(
			'availableLanguages' => array(
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'km',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
			),
		),
	),
	'FE' => array(
		'compressionLevel' => '9',
		'disableNoCacheParameter' => '1',
		'hidePagesIfNotTranslatedByDefault' => '1',
		'lifetime' => '3600',
		'loginSecurityLevel' => 'rsa',
		'pageNotFound_handling' => '/error-404/',
		'pageNotFound_handling_statheader' => 'HTTP/1.1 404 Not Found',
		'versionNumberInFilename' => 'embed',
	),
	'GFX' => array(
		'gdlib_png' => '1',
		'im_combine_filename' => 'composite',
		'im_version_5' => 'im6',
	),
	'INSTALL' => array(
		'wizardDone' => array(
			'TYPO3\CMS\Install\CoreUpdates\CompressionLevelUpdate' => 1,
			'TYPO3\CMS\Install\CoreUpdates\InstallSysExtsUpdate' => '["info","perm","func","filelist","about","cshmanual","feedit","opendocs","recycler","t3editor","reports","scheduler","simulatestatic"]',
			'TYPO3\CMS\Install\Updates\FilemountUpdateWizard' => 1,
			'TYPO3\CMS\Install\Updates\TceformsUpdateWizard' => 'tt_content:image,pages:media,pages_language_overlay:media',
		),
	),
	'MAIL' => array(
		'defaultMailFromAddress' => 'noreply@visay.info',
		'defaultMailFromName' => 'Visay Info',
	),
	'SYS' => array(
		'UTF8filesystem' => '1',
		'compat_version' => '6.1',
		'defaultCategorizedTables' => 'pages,tt_content',
		'serverTimeZone' => '7',
	),
);
?>