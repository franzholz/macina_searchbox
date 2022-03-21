<?php
defined('TYPO3_MODE') || die('Access denied.');

$table = 'tt_content';

$listType = MACINA_SEARCHBOX_EXT . '_pi1';

$GLOBALS['TCA'][$table]['types']['list']['subtypes_excludelist'][$listType] = 'layout,select_key';
$GLOBALS['TCA'][$table]['types']['list']['subtypes_addlist'][$listType] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    $listType,
    'FILE:EXT:' . MACINA_SEARCHBOX_EXT . '/pi1/flexform_ds_pi1.xml'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:' . MACINA_SEARCHBOX_EXT . '/Resources/Private/Language/locallang_db.xlf:tt_content.list_type',
        $listType,
        'EXT:' . MACINA_SEARCHBOX_EXT . '/ext_icon.gif'
    ],
    'list_type',
    MACINA_SEARCHBOX_EXT
);


