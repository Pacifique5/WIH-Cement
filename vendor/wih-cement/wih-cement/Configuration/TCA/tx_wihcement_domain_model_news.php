<?php

return [
    'ctrl' => [
        'title' => 'News & Media',
        'label' => 'title',
        'label_alt' => 'news_type',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => ['disabled' => 'hidden'],
        'sortby' => 'sorting',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'searchFields' => 'title,teaser,body_text,author',
        'iconfile' => 'EXT:wih_cement/Resources/Public/Icons/news.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                --div--;General,
                    sys_language_uid, l10n_parent, l10n_diffsource,
                    title, slug, news_type, publish_date, author, tags,
                --div--;Content,
                    teaser, body_text, image,
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
                'foreign_table' => 'tx_wihcement_domain_model_news',
                'foreign_table_where' => 'AND {#tx_wihcement_domain_model_news}.{#pid}=###CURRENT_PID### AND {#tx_wihcement_domain_model_news}.{#sys_language_uid} IN (-1,0)',
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
            'label' => 'Title',
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
        'news_type' => [
            'label' => 'Type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Company News', 'value' => 'news'],
                    ['label' => 'Press Release', 'value' => 'press'],
                    ['label' => 'Event', 'value' => 'event'],
                    ['label' => 'Blog / Construction Tips', 'value' => 'blog'],
                ],
            ],
        ],
        'publish_date' => [
            'label' => 'Publish Date',
            'config' => ['type' => 'datetime', 'format' => 'date'],
        ],
        'author' => [
            'label' => 'Author',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 255],
        ],
        'tags' => [
            'label' => 'Tags (comma separated)',
            'config' => ['type' => 'input', 'size' => 80, 'max' => 500],
        ],
        'teaser' => [
            'label' => 'Teaser / Excerpt',
            'config' => ['type' => 'text', 'rows' => 3, 'cols' => 80],
        ],
        'body_text' => [
            'label' => 'Full Content',
            'config' => ['type' => 'text', 'rows' => 15, 'cols' => 80, 'enableRichtext' => true],
        ],
        'image' => [
            'label' => 'Featured Image',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'appearance' => ['createNewRelationLinkTitle' => 'Add image'],
            ],
        ],
    ],
];
