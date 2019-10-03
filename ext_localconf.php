<?php
defined('TYPO3_MODE') || die('Access denied.');

if (!defined ('MACINA_SEARCHBOX_EXT')) {
    define('MACINA_SEARCHBOX_EXT', 'macina_searchbox');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(MACINA_SEARCHBOX_EXT, 'pi1/class.tx_macinasearchbox_pi1.php', '_pi1', 'list_type', 1);

