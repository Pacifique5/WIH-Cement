<?php

defined('TYPO3') or die();

// Register backend user groups
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '@import "EXT:wih_cement/Configuration/TSconfig/User/user.tsconfig"'
);

// Register plugins in new content element wizard
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WihCement',
    'ProductList',
    'WIH: Product List / Detail'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WihCement',
    'ProjectList',
    'WIH: Projects & Case Studies'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WihCement',
    'NewsList',
    'WIH: News & Media'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WihCement',
    'CareerList',
    'WIH: Careers'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WihCement',
    'DealerRegistration',
    'WIH: Dealer Registration'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WihCement',
    'ContactForm',
    'WIH: Contact Form'
);
