<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$typo_db_extTableDef_script = 'extTables.php';

	// Include specific environment configuration
@include(PATH_typo3conf . 'visayconf.php');

///////////////////////////////////////////////////
// After cloning the project from the repository,
// you need to comment the @include line above and
// enable the following commented lines to add your
// own environment.
///////////////////////////////////////////////////
//
// $typo_db_username = 'your_database_username';
// $typo_db_password = 'your_database_password';
// $typo_db_host = 'your_database_host'; // Example: 'localhost'
// $typo_db = 'your_database_name';
//
// $TYPO3_CONF_VARS['SYS']['encryptionKey'] = '1573be58e47af894d59045dc4930dc4201309009b0a51ca1ccbe4ec773218140d75aea0bf496635364731ba44f2b6573';
// $TYPO3_CONF_VARS['SYS']['sitename'] = 'Your Sitename';
// 
// $TYPO3_CONF_VARS['BE']['installToolPassword'] = '827ccb0eea8a706c4c34a16891f84e7b';
//
///////////////////////////////////////////////////

	// System configuration
$TYPO3_CONF_VARS['SYS']['compat_version'] = '4.7';

	// Backend configuration
$TYPO3_CONF_VARS['BE']['versionNumberInFilename'] = '0';
$TYPO3_CONF_VARS['BE']['disable_exec_function'] = '0';
$TYPO3_CONF_VARS['BE']['loginSecurityLevel']  = 'rsa';

	// Frontend configuration
$TYPO3_CONF_VARS['FE']['loginSecurityLevel']  = 'rsa';

	// Image processing configuration
$TYPO3_CONF_VARS['GFX']['gdlib_png'] = '1'; 
$TYPO3_CONF_VARS['GFX']['im_version_5'] = 'gm';

	// Loaded extensions
$TYPO3_CONF_VARS['EXT']['extList'] = 'extbase,css_styled_content,info,perm,func,filelist,fluid,about,version,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,t3skin,t3editor,reports,felogin,form,rsaauth,saltedpasswords,cshmanual,opendocs,recycler,scheduler,workspaces,static_info_tables,templavoila,realurl';
$TYPO3_CONF_VARS['EXT']['extList_FE'] = 'extbase,css_styled_content,fluid,version,install,rtehtmlarea,t3skin,felogin,form,rsaauth,saltedpasswords,workspaces,static_info_tables,templavoila,realurl';

	// Extension configuration
$TYPO3_CONF_VARS['EXT']['extConf']['saltedpasswords'] = 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}';
$TYPO3_CONF_VARS['EXT']['extConf']['static_info_tables'] = 'a:1:{s:7:"charset";s:5:"utf-8";}';
$TYPO3_CONF_VARS['EXT']['extConf']['templavoila'] = 'a:1:{s:7:"enable.";a:3:{s:13:"oldPageModule";s:1:"0";s:19:"selectDataStructure";s:1:"0";s:15:"renderFCEHeader";s:1:"0";}}';
$TYPO3_CONF_VARS['EXT']['extConf']['realurl'] = 'a:5:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}';

## INSTALL SCRIPT EDIT POINT TOKEN - all lines after this points may be changed by the install script!

?>
