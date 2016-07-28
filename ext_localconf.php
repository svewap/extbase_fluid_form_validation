<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}



\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'WapplerSystems.' . $_EXTKEY,
	'profile',
	array(
		'Profile' => 'form,submit',
	),
	// non-cacheable actions
	array(
		'Profile' => 'form,submit',
	)
);



?>
