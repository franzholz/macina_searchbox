<?php
defined('TYPO3_MODE') || die('Access denied.');

if (!defined ('MACINA_SEARCHBOX_EXT')) {
    define('MACINA_SEARCHBOX_EXT', 'macina_searchbox');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    MACINA_SEARCHBOX_EXT,
    'Configuration/TypoScript/PluginSetup/',
    'Macina Searchbox'
);
