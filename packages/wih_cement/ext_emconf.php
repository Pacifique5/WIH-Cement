<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'WIH Cement',
    'description' => 'Main site extension for WIH Cement website',
    'category' => 'templates',
    'author' => 'WIH Cement',
    'author_email' => 'admin@wihcement.com',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-13.99.99',
            'fluid_styled_content' => '',
            'form' => '',
            'felogin' => '',
            'seo' => '',
        ],
    ],
];
