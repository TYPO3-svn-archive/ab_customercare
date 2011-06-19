<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Ab_cc_view',
	array(
		'Company' => 'list, show, new, create, edit, update, delete',
		'Address' => 'list, show, new, create, edit, update, delete',
		'Employee' => 'list, show, new, create, edit, update, delete',
		'Action' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Company' => 'create, update, delete',
		'Address' => 'create, update, delete',
		'Employee' => 'create, update, delete',
		'Action' => 'create, update, delete',
		
	)
);

?>