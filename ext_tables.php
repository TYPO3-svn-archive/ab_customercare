<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Ab_cc_view',
	'Customer Care View'
);

//$pluginSignature = str_replace('_','',$_EXTKEY) . '_' . ab_cc_view;
//$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_' .ab_cc_view. '.xml');





if (TYPO3_MODE === 'BE') {

	/**
	* Registers a Backend Module
	*/
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'tools',	 // Make module a submodule of 'tools'
		'ab_cc_view_mod',	// Submodule key
		'',						// Position
		array(
			'Company' => 'list, show, new, create, edit, update, delete',
+			'Address' => 'list, show, new, create, edit, update, delete',
+			'Employee' => 'list, show, new, create, edit, update, delete',
+			'Action' => 'list, show, new, create, edit, update, delete',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_ab_cc_view_mod.xml',
		)
	);

}


t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Customer Care');


t3lib_extMgm::addLLrefForTCAdescr('tx_abcustomercare_domain_model_company', 'EXT:ab_customercare/Resources/Private/Language/locallang_csh_tx_abcustomercare_domain_model_company.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_abcustomercare_domain_model_company');
$TCA['tx_abcustomercare_domain_model_company'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ab_customercare/Resources/Private/Language/locallang_db.xml:tx_abcustomercare_domain_model_company',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Company.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_abcustomercare_domain_model_company.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_abcustomercare_domain_model_address', 'EXT:ab_customercare/Resources/Private/Language/locallang_csh_tx_abcustomercare_domain_model_address.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_abcustomercare_domain_model_address');
$TCA['tx_abcustomercare_domain_model_address'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ab_customercare/Resources/Private/Language/locallang_db.xml:tx_abcustomercare_domain_model_address',
		'label' => 'street',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Address.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_abcustomercare_domain_model_address.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_abcustomercare_domain_model_employee', 'EXT:ab_customercare/Resources/Private/Language/locallang_csh_tx_abcustomercare_domain_model_employee.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_abcustomercare_domain_model_employee');
$TCA['tx_abcustomercare_domain_model_employee'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ab_customercare/Resources/Private/Language/locallang_db.xml:tx_abcustomercare_domain_model_employee',
		'label' => 'last_name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Employee.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_abcustomercare_domain_model_employee.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_abcustomercare_domain_model_action', 'EXT:ab_customercare/Resources/Private/Language/locallang_csh_tx_abcustomercare_domain_model_action.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_abcustomercare_domain_model_action');
$TCA['tx_abcustomercare_domain_model_action'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ab_customercare/Resources/Private/Language/locallang_db.xml:tx_abcustomercare_domain_model_action',
		'label' => 'type',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Action.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_abcustomercare_domain_model_action.gif'
	),
);

?>