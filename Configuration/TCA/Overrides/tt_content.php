<?php
defined('TYPO3_MODE') || die('Access denied.');

use \TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function ($extensionKey, $table): void {
    $listType = $extensionKey . '_pi1';
    $languageSubpath = '/Resources/Private/Language/';

    $GLOBALS['TCA'][$table]['types']['list']['subtypes_excludelist'][$listType] = 'layout';
    $GLOBALS['TCA'][$table]['types']['list']['subtypes_addlist'][$listType] = 'pi_flexform';

    ExtensionManagementUtility::addPiFlexFormValue(
        $listType,
        'FILE:EXT:' . $extensionKey . '/Configuration/Flexforms/Plugin.xml'
    );

    ExtensionManagementUtility::addPlugin(
        [
            'LLL:EXT:' . $extensionKey . $languageSubpath . 'locallang_db.xlf:tt_content.list_type',
            $listType
        ],
        'list_type',
        $extensionKey
    );
}, 'macina_searchbox', basename(__FILE__, '.php'));

