<?php

defined('TYPO3') or die();

// Register TypoScript
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    '@import "EXT:wih_cement/Configuration/TypoScript/Setup/setup.typoscript"'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(
    '@import "EXT:wih_cement/Configuration/TypoScript/Constants/constants.typoscript"'
);

// Register plugins
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'WihCement',
    'ProductList',
    [\WihCement\WihCement\Controller\ProductController::class => 'list,show,inquiry'],
    [\WihCement\WihCement\Controller\ProductController::class => 'inquiry']
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'WihCement',
    'ProjectList',
    [\WihCement\WihCement\Controller\ProjectController::class => 'list,show'],
    []
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'WihCement',
    'NewsList',
    [\WihCement\WihCement\Controller\NewsController::class => 'list,show'],
    []
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'WihCement',
    'CareerList',
    [\WihCement\WihCement\Controller\CareerController::class => 'list,show,apply'],
    [\WihCement\WihCement\Controller\CareerController::class => 'apply']
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'WihCement',
    'DealerRegistration',
    [\WihCement\WihCement\Controller\DealerController::class => 'form,register'],
    [\WihCement\WihCement\Controller\DealerController::class => 'register']
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'WihCement',
    'ContactForm',
    [\WihCement\WihCement\Controller\ContactController::class => 'form,send'],
    [\WihCement\WihCement\Controller\ContactController::class => 'send']
);
