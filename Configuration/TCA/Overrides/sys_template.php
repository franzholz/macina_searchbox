<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function ($extensionKey, $table): void {
    
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/PluginSetup/',
        'Macina Searchbox'
    );
}, 'macina_searchbox', basename(__FILE__, '.php'));
