<?php
/***************************************************************
*  Copyright notice
*  
*  (c) 2003 Wolfgang Becker (wb@macina.com)
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is 
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
* 
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
* 
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/** 
 * Plugin 'Searchbox' for the 'macina_searchbox' extension.
 *
 * @author	Wolfgang Becker <wb@macina.com>
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;


class tx_macinasearchbox_pi1 extends \TYPO3\CMS\Frontend\Plugin\AbstractPlugin {
	public $prefixId = 'tx_macinasearchbox_pi1';		// Same as class name
	public $scriptRelPath = 'pi1/class.tx_macinasearchbox_pi1.php';	// Path to this script relative to the extension dir.
	public $extKey = 'macina_searchbox';	// The extension key.
	
	/**
	 * Main function
	 */
	public function main ($content, $conf)
	{
		$this->conf = $conf;
		$this->pi_setPiVarDefaults();
		$this->pi_loadLL();
		$templateService = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Service\MarkerBasedTemplateService::class);

		// get the template
		$this->templateCode = $this->cObj->fileResource($this->conf['templateFile']);
		// get main subpart
		$templateMarker = '###TEMPLATE###';
		$template = array();
		$template = $this->cObj->getSubpart($this->templateCode, $templateMarker);
	
		// create the content by replacing the marker in the template
		$markerArray = array();
		$markerArray['###HEADLINE###'] = $this->pi_getLL('headline');
        $urlParameters = [
            'tx_indexedsearch_pi2[action]' => 'search',
            'tx_indexedsearch_pi2[controller]' => 'Search'
        ];

        $linkConf = array();
        $linkConf['useCacheHash'] = '1';
        $linkConf['useDefaultLanguageRecord'] = false;
        $linkConf['parameter'] = $this->conf['pidSearchpage'];
        $linkConf['additionalParams'] = GeneralUtility::implodeArrayForUrl('', $urlParameters, '', true);
        $markerArray['###ADVANCED###'] =
            $this->cObj->typoLink(
                $this->pi_getLL('advanced'),
                $linkConf
            );

		$markerArray['###SUBMIT###'] = $this->pi_getLL('submit');
		$markerArray['###ACTLANG###'] = $GLOBALS['TSFE']->sys_language_uid;

		$linkConf = array();
        $linkConf['useCacheHash'] = GeneralUtility::_GET('cHash') ? '1' : '0';
        $linkConf['useDefaultLanguageRecord'] = false;
        $linkConf['returnLast'] = 'url';
        $linkConf['parameter'] = $this->conf['pidSearchpage'];

        $url = $this->cObj->typoLink(
                '',
                $linkConf
            );
		$markerArray['###SEARCHPID###'] = htmlspecialchars($url);
		
		// buid content from template + array		
		$content =
            $templateService->substituteMarkerArrayCached(
                $template,
                array(),
                $markerArray,
                array()
            );
        $result = $this->pi_wrapInBaseClass($content);
	
		return $result;
    }
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/macina_searchbox/pi1/class.tx_macinasearchbox_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/macina_searchbox/pi1/class.tx_macinasearchbox_pi1.php']);
}
