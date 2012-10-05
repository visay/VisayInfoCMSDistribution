<?php

$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'] = array(
	'init' => array(
		'enableCHashCache' => 1,
		'appendMissingSlash' => 'ifNotFile,redirect',
		'adminJumpToBackend' => 1,
		'enableUrlDecodeCache' => 1,
		'enableUrlEncodeCache' => 1,
		'emptyUrlReturnValue' => '/'
	),
	'pagePath' => array(
		'type' => 'user',
		'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
		'spaceCharacter' => '-',
		'languageGetVar' => 'L',
		'rootpage_id' => '2'
	),
	'fileName' => array(
		'defaultToHTMLsuffixOnPrev' => 0,
		'acceptHTMLsuffix' => 1
	)
);

?>