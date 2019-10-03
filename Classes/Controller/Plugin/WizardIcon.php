<?php
/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with TYPO3 source code.
 *
 * The TYPO3 project - inspiring people to share!
 */


namespace JambageCom\MacinaSearchbox\Controller\Plugin;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Class that adds the wizard icon.
 *
 * @category    Plugin
 * @package     TYPO3
 * @subpackage  macina_searchbox
 * @author      Franz Holzinger <franz@ttproducts.de>
 * @license     http://www.gnu.org/copyleft/gpl.html
 */
class WizardIcon
{
    /**
     * Processes the wizard items array.
     *
     * @param array $wizardItems The wizard items
     * @return array Modified array with wizard items
     */
    public function proc(array $wizardItems)
    {
        $wizardIcon = 'pi1/ce_wiz.gif';
        $listType = MACINA_SEARCHBOX_EXT . '_pi1';
        $params = '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=' . $listType;

        $wizardItem = array(
            'title' => $GLOBALS['LANG']->sL('LLL:EXT:' . MACINA_SEARCHBOX_EXT . '/locallang.xlf:pi1_title'),
            'description' => $GLOBALS['LANG']->sL('LLL:EXT:' . MACINA_SEARCHBOX_EXT . '/locallang.xlf:pi1_plus_wiz_description'),
            'params' => $params
        );

        $iconIdentifier = 'extensions-macina_searchbox-wizard';
        /** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
        $iconRegistry = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        $iconRegistry->registerIcon(
            $iconIdentifier,
            \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
            array(
                'source' => 'EXT:' . MACINA_SEARCHBOX_EXT . '/' . $wizardIcon,
            )
        );
        $wizardItem['iconIdentifier'] = $iconIdentifier;
        $wizardItems['plugins_tx_' . $listType] = $wizardItem;

        return $wizardItems;
    }
}
