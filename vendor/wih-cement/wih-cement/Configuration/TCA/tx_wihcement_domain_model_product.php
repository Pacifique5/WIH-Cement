<?php

return [
    'ctrl' => [
        'title' => 'Product',
        'label' => 'name',
        'label_alt' => 'category',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => ['disabled' => 'hidden'],
        'sortby' => 'sorting',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'searchFields' => 'name,category,description',
        'iconfile' => 'EXT:wih_cement/Resources/Public/Icons/product.svg',
        'slug' => ['fields' => ['name']],
    ],
    'types' => [
        '1' => [
            'showitem' => '
                --div--;General,
                    sys_language_uid, l10n_parent, l10n_diffsource,
                    name, slug, category, is_featured,
                    short_description, description,
                --div--;Technical Details,
                    technical_specs, applications, performance_data,
                    packaging_details, safety_information,
                --div--;Media & Downloads,
                    image, datasheet,
                --div--;Access,
                    hidden,
            ',
        ],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => ['type' => 'language'],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [['label' => '', 'value' => 0]],
                'foreign_table' => 'tx_wihcement_domain_model_product',
                'foreign_table_where' => 'AND {#tx_wihcement_domain_model_product}.{#pid}=###CURRENT_PID### AND {#tx_wihcement_domain_model_product}.{#sys_language_uid} IN (-1,0)',
                'default' => 0,
            ],
        ],
        'l10n_diffsource' => ['config' => ['type' => 'passthrough']],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => ['type' => 'check', 'renderType' => 'checkboxToggle', 'items' => [['label' => '', 'invertStateDisplay' => true]]],
        ],
        'name' => [
            'label' => 'Product Name',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 255, 'required' => true],
        ],
        'slug' => [
            'label' => 'URL Slug',
            'config' => [
                'type' => 'slug',
                'size' => 50,
                'generatorOptions' => ['fields' => ['name'], 'replacements' => ['/' => '-']],
                'fallbackCharacter' => '-',
                'eval' => 'uniqueInSite',
                'default' => '',
            ],
        ],
        'category' => [
            'label' => 'Category',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Ordinary Portland Cement (OPC)', 'value' => 'opc'],
                    ['label' => 'Portland Pozzolana Cement (PPC)', 'value' => 'ppc'],
                    ['label' => 'Rapid Hardening Cement', 'value' => 'rhc'],
                    ['label' => 'Specialized Cement', 'value' => 'specialized'],
                ],
            ],
        ],
        'is_featured' => [
            'label' => 'Featured on Homepage',
            'config' => ['type' => 'check', 'renderType' => 'checkboxToggle'],
        ],
        'short_description' => [
            'label' => 'Short Description',
            'config' => ['type' => 'text', 'rows' => 3, 'cols' => 80],
        ],
        'description' => [
            'label' => 'Full Description',
            'config' => ['type' => 'text', 'rows' => 8, 'cols' => 80, 'enableRichtext' => true],
        ],
        'technical_specs' => [
            'label' => 'Technical Specifications',
            'config' => ['type' => 'text', 'rows' => 8, 'cols' => 80, 'enableRichtext' => true],
        ],
        'applications' => [
            'label' => 'Applications',
            'config' => ['type' => 'text', 'rows' => 5, 'cols' => 80, 'enableRichtext' => true],
        ],
        'performance_data' => [
            'label' => 'Performance Data Sheet',
            'config' => ['type' => 'text', 'rows' => 5, 'cols' => 80, 'enableRichtext' => true],
        ],
        'packaging_details' => [
            'label' => 'Packaging Details',
            'config' => ['type' => 'text', 'rows' => 4, 'cols' => 80],
        ],
        'safety_information' => [
            'label' => 'Safety Information',
            'config' => ['type' => 'text', 'rows' => 4, 'cols' => 80, 'enableRichtext' => true],
        ],
        'image' => [
            'label' => 'Product Image',
            'config' => [
                'type' => 'file',
                'maxitems' => 5,
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'appearance' => ['createNewRelationLinkTitle' => 'Add image'],
            ],
        ],
        'datasheet' => [
            'label' => 'Downloadable Datasheet (PDF)',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'pdf',
                'appearance' => ['createNewRelationLinkTitle' => 'Add PDF'],
            ],
        ],
    ],
];
