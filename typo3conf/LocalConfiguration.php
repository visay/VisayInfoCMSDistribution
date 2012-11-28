<?php
return array(
	'BE' => array(
		'adminOnly' => '2',
		'compactFlexFormXML' => '1',
		'compressionLevel' => '9',
		'disable_exec_function' => '0',
		'flexformForceCDATA' => '1',
		'installToolPassword' => '',
		'loginSecurityLevel' => 'rsa',
		'versionNumberInFilename' => '1',
		'warning_email_addr' => 'keo@visay.info',
	),
	'DB' => array(
		'database' => '',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => '',
		'password' => '',
		'username' => '',
	),
	'EXT' => array(
		'allowLocalInstall' => '0',
		'extConf' => array(
			'dam' => 'a:7:{s:8:"tsconfig";s:7:"default";s:13:"file_filelist";s:1:"0";s:15:"hideMediaFolder";s:1:"1";s:8:"mediatag";s:1:"1";s:15:"htmlAreaBrowser";s:1:"1";s:5:"devel";s:1:"0";s:17:"disableVersioning";s:1:"0";}',
			'dam_index' => 'a:2:{s:18:"add_media_indexing";s:1:"0";s:23:"add_media_file_indexing";s:1:"1";}',
			'dam_ttcontent' => 'a:4:{s:28:"ctypes_textpic_image_add_ref";s:1:"1";s:35:"ctypes_textpic_image_add_orig_field";s:1:"0";s:19:"add_css_styled_hook";s:1:"1";s:17:"add_ws_mod_xclass";s:1:"1";}',
			'indexed_search' => 'a:18:{s:8:"pdftools";s:9:"/usr/bin/";s:8:"pdf_mode";s:2:"20";s:5:"unzip";s:9:"/usr/bin/";s:6:"catdoc";s:9:"/usr/bin/";s:6:"xlhtml";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:5:"unrtf";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:18:"fullTextDataLength";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:21:"enableMetaphoneSearch";s:1:"1";s:6:"minAge";s:2:"24";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:26:"useCrawlerForExternalFiles";s:1:"0";s:11:"flagBitMask";s:3:"192";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";}',
			'news' => 'a:10:{s:29:"removeListActionFromFlexforms";s:1:"2";s:20:"pageModuleFieldsNews";s:313:"LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_advanced=title,datetime,teaser,category;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_complex=title,datetime,teaser,category,archive;";s:24:"pageModuleFieldsCategory";s:17:"title,description";s:6:"tagPid";s:1:"1";s:13:"prependAtCopy";s:1:"1";s:19:"categoryRestriction";s:4:"none";s:22:"contentElementRelation";s:1:"0";s:13:"manualSorting";s:1:"0";s:11:"archiveDate";s:4:"date";s:12:"showImporter";s:1:"0";}',
			'phpmyadmin' => 'a:4:{s:12:"hideOtherDBs";s:1:"1";s:9:"uploadDir";s:21:"uploads/tx_phpmyadmin";s:10:"allowedIps";s:0:"";s:12:"useDevIpMask";s:1:"0";}',
			'realurl' => 'a:5:{s:10:"configFile";s:35:"typo3conf/settings/realurl_conf.php";s:14:"enableAutoConf";s:1:"0";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
			'saltedpasswords' => 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}',
			'sr_feuser_register' => 'a:3:{s:12:"uploadFolder";s:27:"uploads/tx_srfeuserregister";s:10:"imageTypes";s:30:"png, jpg, jpeg, gif, tif, tiff";s:12:"imageMaxSize";s:3:"500";}',
			'static_info_tables' => 'a:1:{s:7:"charset";s:5:"utf-8";}',
			'templavoila' => 'a:2:{s:7:"enable.";a:3:{s:13:"oldPageModule";s:1:"0";s:19:"selectDataStructure";s:1:"0";s:15:"renderFCEHeader";s:1:"0";}s:9:"staticDS.";a:3:{s:6:"enable";s:1:"1";s:8:"path_fce";s:26:"typo3conf/settings/ds/fce/";s:9:"path_page";s:27:"typo3conf/settings/ds/page/";}}',
		),
		'extList' => 'extbase,css_styled_content,info,perm,func,filelist,fluid,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,t3skin,t3editor,reports,felogin,form,rsaauth,saltedpasswords,cshmanual,opendocs,recycler,scheduler,workspaces,static_info_tables,templavoila,realurl,div2007,sr_feuser_register,indexed_search,dam,dam_ttcontent,dam_index,dam_catedit,phpmyadmin,news,formhandler,adodb,dbal',
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
			'static_info_tables',
			'templavoila',
			'realurl',
			'div2007',
			'sr_feuser_register',
			'indexed_search',
			'dam',
			'dam_ttcontent',
			'dam_index',
			'dam_catedit',
			'phpmyadmin',
			'news',
			'formhandler',
			'adodb',
			'dbal',
		),
		'extList_FE' => 'extbase,css_styled_content,fluid,version,install,rtehtmlarea,t3skin,felogin,form,rsaauth,saltedpasswords,workspaces,static_info_tables,templavoila,realurl,div2007,sr_feuser_register,indexed_search,dam,dam_ttcontent,dam_index,phpmyadmin,news,formhandler',
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
			'TYPO3\CMS\Install\CoreUpdates\InstallSysExtsUpdate' => '["info","perm","func","filelist","about","cshmanual","feedit","opendocs","recycler","t3editor","reports","scheduler"]',
			'TYPO3\CMS\Install\Updates\TceformsUpdateWizard' => 'tt_content:image,pages:media,pages_language_overlay:media',
			'tx_coreupdates_compressionlevel' => '1',
			'tx_coreupdates_installsysexts' => '1',
		),
	),
	'MAIL' => array(
		'defaultMailFromAddress' => 'noreply@visay.info',
		'defaultMailFromName' => 'Visay Info',
	),
	'SYS' => array(
		'UTF8filesystem' => '1',
		'compat_version' => '6.0',
		'displayErrors' => '1',
		'enableDeprecationLog' => 'file',
		'encryptionKey' => '',
		'serverTimeZone' => '7',
		'sitename' => 'Visay Info - Local System',
		'sqlDebug' => '1',
		'systemLog' => 'error_log,,1',
		'systemLogLevel' => '1',
	),
);
?>