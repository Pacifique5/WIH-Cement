<?php

return [
    'ctrl' => [
        'title' => 'Project',
        'label' => 'title',
        'label_alt' => 'project_type',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => ['disabled' => 'hidden'],
        'sortby' => 'sorting',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'searchFields' => 'title,client,location,description',
        'iconfile' => 'EXT:wih_cement/Resources/Public/Icons/project.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                --div--;General,
                    sys_language_uid, l10n_parent, l10n_diffsource,
                    title, slug, project_type, is_featured,
                    client, location, completion_date,
                --div--;Content,
                    description, performance_metrics,
                --div--;Media,
                    images,
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
                'foreign_table' => 'tx_wihcement_domain_model_project',
                'foreign_table_where' => 'AND {#tx_wihcement_domain_model_project}.{#pid}=###CURRENT_PID### AND {#tx_wihcement_domain_model_project}.{#sys_language_uid} IN (-1,0)',
                'default' => 0,
            ],
        ],
        'l10n_diffsource' => ['config' => ['type' => 'passthrough']],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => ['type' => 'check', 'renderType' => 'checkboxToggle', 'items' => [['label' => '', 'invertStateDisplay' => true]]],
        ],
        'title' => [
            'label' => 'Project Title',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 255, 'required' => true],
        ],
        'slug' => [
            'label' => 'URL Slug',
            'config' => [
                'type' => 'slug',
                'generatorOptions' => ['fields' => ['title'], 'replacements' => ['/' => '-']],
                'fallbackCharacter' => '-',
                'eval' => 'uniqueInSite',
                'default' => '',
            ],
        ],
        'project_type' => [
            'label' => 'Project Type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Infrastructure', 'value' => 'infrastructure'],
                    ['label' => 'Commercial', 'value' => 'commercial'],
                    ['label' => 'Residential', 'value' => 'residential'],
                    ['label' => 'Government Contract', 'value' => 'government'],
                ],
            ],
        ],
        'client' => [
            'label' => 'Client',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 255],
        ],
        'location' => [
            'label' => 'Location',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 255],
        ],
        'completion_date' => [
            'label' => 'Completion Date',
            'config' => ['type' => 'datetime', 'format' => 'date'],
        ],
        'description' => [
            'label' => 'Description',
            'config' => ['type' => 'text', 'rows' => 8, 'cols' => 80, 'enableRichtext' => true],
        ],
        'performance_metrics' => [
            'label' => 'Performance Metrics',
            'config' => ['type' => 'text', 'rows' => 5, 'cols' => 80, 'enableRichtext' => true],
        ],
        'is_featured' => [
            'label' => 'Featured on Homepage',
            'config' => ['type' => 'check', 'renderType' => 'checkboxToggle'],
        ],
        'images' => [
            'label' => 'Project Images',
            'config' => [
                'type' => 'file',
                'maxitems' => 20,
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'appearance' => ['createNewRelationLinkTitle' => 'Add image'],
            ],
        ],
    ],
];
