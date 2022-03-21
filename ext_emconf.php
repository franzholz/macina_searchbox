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
    'version' => '3.1.0',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-8.1.99',
            'typo3' => '9.5.0-11.5.99',
        ],
        'suggests' => [
            'indexed_search' => '9.5.0-11.5.99',
        ],
    ],
];
