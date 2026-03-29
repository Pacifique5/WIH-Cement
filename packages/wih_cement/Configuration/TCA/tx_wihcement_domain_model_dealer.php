<?php

return [
    'ctrl' => [
        'title' => 'Dealer / Distributor',
        'label' => 'company_name',
        'label_alt' => 'region',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => ['disabled' => 'hidden'],
        'searchFields' => 'company_name,contact_person,email,region,country',
        'iconfile' => 'EXT:wih_cement/Resources/Public/Icons/dealer.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                --div--;Company Info,
                    company_name, contact_person, email, phone,
                --div--;Location,
                    region, country, address, latitude, longitude,
                --div--;Status,
                    status, is_approved, hidden,
            ',
        ],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => ['type' => 'check', 'renderType' => 'checkboxToggle', 'items' => [['label' => '', 'invertStateDisplay' => true]]],
        ],
        'company_name' => [
            'label' => 'Company Name',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 255, 'required' => true],
        ],
        'contact_person' => [
            'label' => 'Contact Person',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 255],
        ],
        'email' => [
            'label' => 'Email',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 255, 'eval' => 'email'],
        ],
        'phone' => [
            'label' => 'Phone',
            'config' => ['type' => 'input', 'size' => 30, 'max' => 50],
        ],
        'region' => [
            'label' => 'Region',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 255],
        ],
        'country' => [
            'label' => 'Country',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 100],
        ],
        'address' => [
            'label' => 'Full Address',
            'config' => ['type' => 'text', 'rows' => 3, 'cols' => 60],
        ],
        'latitude' => [
            'label' => 'Latitude',
            'config' => ['type' => 'input', 'size' => 20, 'eval' => 'double2'],
        ],
        'longitude' => [
            'label' => 'Longitude',
            'config' => ['type' => 'input', 'size' => 20, 'eval' => 'double2'],
        ],
        'status' => [
            'label' => 'Application Status',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Pending Review', 'value' => 'pending'],
                    ['label' => 'Under Review', 'value' => 'reviewing'],
                    ['label' => 'Approved', 'value' => 'approved'],
                    ['label' => 'Rejected', 'value' => 'rejected'],
                ],
            ],
        ],
        'is_approved' => [
            'label' => 'Show on Dealer Map',
            'config' => ['type' => 'check', 'renderType' => 'checkboxToggle'],
        ],
    ],
];
