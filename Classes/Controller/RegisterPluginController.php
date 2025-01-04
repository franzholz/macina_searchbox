<?php

namespace JambageCom\MacinaSearchbox\Controller;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Psr\Http\Message\ServerRequestInterface;

class RegisterPluginController
{
    /**
     * Should normally be set in the main function with the TypoScript content passed to the method.
     *
     * $conf['LOCAL_LANG'][_key_] is reserved for Local Language overrides.
     * $conf['CODE.']['10.']['userFunc'] reserved for setting up the USER / USER_INT object. See TSref where CODE is the code of the plugin
     *
     * @var array
     */
    public $conf = [];

    public $extensionKey = 'macina_searchbox';


    /**
    * Main board function. Call this from TypoScript
    */
    public function main(
        string $content,
        array $conf,
        ServerRequestInterface $request
    ) : string {
        $content = 'The extension ' . $this->extensionKey . ' does not use its own plugin but the setup lib.macina_searchbox to have your search plugin on one or many pages at the same time. The search results are forwarded to the TYPO3 system extension Indexed Search. This gives you the possibility for an easier insertion of search mask on each page at once.';
        return $content;
    }
}
