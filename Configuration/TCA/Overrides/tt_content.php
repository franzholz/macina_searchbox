<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function ($extensionKey, $table): void {
    $listType = $extensionKey . '_pi1';

    $GLOBALS['TCA'][$table]['types']['list']['subtypes_excludelist'][$listType] = 'layout';
    $GLOBALS['TCA'][$table]['types']['list']['subtypes_addlist'][$listType] = 'pi_flexform';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        $listType,
        'FILE:EXT:' . $extensionKey . '/Configuration/Flexforms/Plugin.xml'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
        [
            'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.list_type',
            $listType,
            'EXT:' . $extensionKey . '/ext_icon.gif'
        ],
        'list_type',
        $extensionKey
    );
}, 'macina_searchbox', basename(__FILE__, '.php'));
