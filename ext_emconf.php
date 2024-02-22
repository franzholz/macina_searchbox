<?php

########################################################################
# Extension Manager/Repository config file for ext "macina_searchbox".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'Searchbox for Indexed Search Engine',
    'description' => 'This Extension offers the possibility to add a searchbox to your Typo3 powered website which submits the searchvalue to the Indexed Search Engine  plugin without any result list output. The extension has a Fluid template which is easy to modify.',
    'category' => 'plugin',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Franz Holzinger, Wolfgang Becker',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'version' => '3.2.0',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-8.4.99',
            'typo3' => '11.5.0-12.4.99',
        ],
        'suggests' => [
            'indexed_search' => '11.5.0-12.4.99',
        ],
    ],
];
