<?php
defined('TYPO3_MODE') || die('Access denied.');

if (
    TYPO3_MODE == 'BE'
) {
    $GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['JambageCom\\MacinaSearchbox\\Controller\\Plugin\\WizardIcon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath(MACINA_SEARCHBOX_EXT) . 'Classes/Controller/Plugin/WizardIcon.php';
}

