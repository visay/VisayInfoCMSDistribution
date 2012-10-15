<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$typo_db_extTableDef_script = 'extTables.php';

	// Include specific environment configuration
@include(PATH_typo3conf . 'settings/visayconf.php');

///////////////////////////////////////////////////
// After cloning the project from the repository,
// you need to enable the @include line above and
// enable the following commented lines to add your
// own environment.
///////////////////////////////////////////////////

	// Database settings
// $typo_db_username = 'your_database_username';
// $typo_db_password = 'your_database_password';
// $typo_db_host = 'your_database_host'; // Example: 'localhost'
// $typo_db = 'your_database_name';

	// System configuration
// $TYPO3_CONF_VARS['SYS']['encryptionKey'] = '1573be58e47af894d59045dc4930dc4201309009b0a51ca1ccbe4ec773218140d75aea0bf496635364731ba44f2b6573';
// $TYPO3_CONF_VARS['SYS']['sitename'] = 'Your Sitename';
// $TYPO3_CONF_VARS['SYS']['serverTimeZone'] = '7';
// $TYPO3_CONF_VARS['SYS']['systemLog'] = 'error_log,,0';
// $TYPO3_CONF_VARS['SYS']['systemLogLevel'] = '3';
// $TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = '';
// $TYPO3_CONF_VARS['SYS']['displayErrors'] = '1';

	// Backend configuration
// $TYPO3_CONF_VARS['BE']['installToolPassword'] = '827ccb0eea8a706c4c34a16891f84e7b';
// $TYPO3_CONF_VARS['BE']['warning_email_addr'] = 'keo@visay.info';
// $TYPO3_CONF_VARS['BE']['adminOnly'] = '2';

	// Mail settings
// $TYPO3_CONF_VARS['MAIL']['defaultMailFromAddress'] = 'noreply@visay.info';
// $TYPO3_CONF_VARS['MAIL']['defaultMailFromName'] = 'Visay Info';

	// Extension configuation
// $TYPO3_CONF_VARS['EXT']['noEdit'] = '0';
// $TYPO3_CONF_VARS['EXT']['allowLocalInstall'] = '0';
// $TYPO3_CONF_VARS['EXT']['extCache'] = '0';

///////////////////////////////////////////////////

	// System configuration
$TYPO3_CONF_VARS['SYS']['compat_version'] = '4.7';

	// Backend configuration
$TYPO3_CONF_VARS['BE']['versionNumberInFilename'] = '0';
$TYPO3_CONF_VARS['BE']['disable_exec_function'] = '0';
$TYPO3_CONF_VARS['BE']['loginSecurityLevel']  = 'rsa';
$TYPO3_CONF_VARS['BE']['compactFlexFormXML'] = '1';
$TYPO3_CONF_VARS['BE']['flexformForceCDATA'] = '1';
$TYPO3_CONF_VARS['BE']['versionNumberInFilename'] = '1';
$TYPO3_CONF_VARS['BE']['compressionLevel'] = '9';

	// Frontend configuration
$TYPO3_CONF_VARS['FE']['loginSecurityLevel']  = 'rsa';
$TYPO3_CONF_VARS['FE']['lifetime'] = '3600';
$TYPO3_CONF_VARS['FE']['pageNotFound_handling'] = '1';
$TYPO3_CONF_VARS['FE']['pageNotFound_handling_statheader'] = 'HTTP/1.1 404 Not Found';
$TYPO3_CONF_VARS['FE']['pageNotFound_handling'] = '/error-404/';
$TYPO3_CONF_VARS['FE']['hidePagesIfNotTranslatedByDefault'] = '1';
$TYPO3_CONF_VARS['FE']['disableNoCacheParameter'] = '1';
$TYPO3_CONF_VARS['FE']['versionNumberInFilename'] = 'embed';
$TYPO3_CONF_VARS['FE']['compressionLevel'] = '9';

	// Image processing configuration
$TYPO3_CONF_VARS['GFX']['gdlib_png'] = '1'; 
$TYPO3_CONF_VARS['GFX']['im_version_5'] = 'im6';
$TYPO3_CONF_VARS['GFX']['im_combine_filename'] = 'composite';

	// Loaded extensions
$TYPO3_CONF_VARS['EXT']['extList'] = 'extbase,css_styled_content,info,perm,func,filelist,fluid,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,t3skin,t3editor,reports,felogin,form,rsaauth,saltedpasswords,cshmanual,opendocs,recycler,scheduler,workspaces,static_info_tables,templavoila,realurl,div2007,sr_feuser_register,indexed_search,dam,dam_ttcontent,dam_index,dam_catedit,phpmyadmin,news';
$TYPO3_CONF_VARS['EXT']['extList_FE'] = 'extbase,css_styled_content,fluid,version,install,rtehtmlarea,t3skin,felogin,form,rsaauth,saltedpasswords,workspaces,static_info_tables,templavoila,realurl,div2007,sr_feuser_register,indexed_search,dam,dam_ttcontent,dam_index,phpmyadmin,news';

	// Extension configuration
$TYPO3_CONF_VARS['EXT']['extConf']['saltedpasswords'] = 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}';
$TYPO3_CONF_VARS['EXT']['extConf']['static_info_tables'] = 'a:1:{s:7:"charset";s:5:"utf-8";}';
$TYPO3_CONF_VARS['EXT']['extConf']['templavoila'] = 'a:2:{s:7:"enable.";a:3:{s:13:"oldPageModule";s:1:"0";s:19:"selectDataStructure";s:1:"0";s:15:"renderFCEHeader";s:1:"0";}s:9:"staticDS.";a:3:{s:6:"enable";s:1:"1";s:8:"path_fce";s:26:"typo3conf/settings/ds/fce/";s:9:"path_page";s:27:"typo3conf/settings/ds/page/";}}';
$TYPO3_CONF_VARS['EXT']['extConf']['realurl'] = 'a:5:{s:10:"configFile";s:35:"typo3conf/settings/realurl_conf.php";s:14:"enableAutoConf";s:1:"0";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}';
$TYPO3_CONF_VARS['EXT']['extConf']['indexed_search'] = 'a:18:{s:8:"pdftools";s:9:"/usr/bin/";s:8:"pdf_mode";s:2:"20";s:5:"unzip";s:9:"/usr/bin/";s:6:"catdoc";s:9:"/usr/bin/";s:6:"xlhtml";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:5:"unrtf";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:18:"fullTextDataLength";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:21:"enableMetaphoneSearch";s:1:"1";s:6:"minAge";s:2:"24";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:26:"useCrawlerForExternalFiles";s:1:"0";s:11:"flagBitMask";s:3:"192";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";}';
$TYPO3_CONF_VARS['EXT']['extConf']['dam'] = 'a:7:{s:8:"tsconfig";s:7:"default";s:13:"file_filelist";s:1:"0";s:15:"hideMediaFolder";s:1:"1";s:8:"mediatag";s:1:"1";s:15:"htmlAreaBrowser";s:1:"1";s:5:"devel";s:1:"0";s:17:"disableVersioning";s:1:"0";}';
$TYPO3_CONF_VARS['EXT']['extConf']['dam_ttcontent'] = 'a:4:{s:28:"ctypes_textpic_image_add_ref";s:1:"1";s:35:"ctypes_textpic_image_add_orig_field";s:1:"0";s:19:"add_css_styled_hook";s:1:"1";s:17:"add_ws_mod_xclass";s:1:"1";}';
$TYPO3_CONF_VARS['EXT']['extConf']['dam_index'] = 'a:2:{s:18:"add_media_indexing";s:1:"0";s:23:"add_media_file_indexing";s:1:"1";}';
$TYPO3_CONF_VARS['EXT']['extConf']['sr_feuser_register'] = 'a:3:{s:12:"uploadFolder";s:27:"uploads/tx_srfeuserregister";s:10:"imageTypes";s:30:"png, jpg, jpeg, gif, tif, tiff";s:12:"imageMaxSize";s:3:"500";}';
$TYPO3_CONF_VARS['EXT']['extConf']['phpmyadmin'] = 'a:4:{s:12:"hideOtherDBs";s:1:"1";s:9:"uploadDir";s:21:"uploads/tx_phpmyadmin";s:10:"allowedIps";s:0:"";s:12:"useDevIpMask";s:1:"0";}';
$TYPO3_CONF_VARS['EXT']['extConf']['news'] = 'a:10:{s:29:"removeListActionFromFlexforms";s:1:"2";s:20:"pageModuleFieldsNews";s:313:"LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_advanced=title,datetime,teaser,category;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_complex=title,datetime,teaser,category,archive;";s:24:"pageModuleFieldsCategory";s:17:"title,description";s:6:"tagPid";s:1:"1";s:13:"prependAtCopy";s:1:"1";s:19:"categoryRestriction";s:4:"none";s:22:"contentElementRelation";s:1:"0";s:13:"manualSorting";s:1:"0";s:11:"archiveDate";s:4:"date";s:12:"showImporter";s:1:"0";}';

	// Install tool wizard settings
$TYPO3_CONF_VARS['INSTALL']['wizardDone']['tx_coreupdates_installsysexts'] = '1';

## INSTALL SCRIPT EDIT POINT TOKEN - all lines after this points may be changed by the install script!

?>