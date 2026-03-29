<?php

return [
    'ctrl' => [
        'title' => 'Job Opening',
        'label' => 'title',
        'label_alt' => 'department',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => ['disabled' => 'hidden'],
        'searchFields' => 'title,department,location,description',
        'iconfile' => 'EXT:wih_cement/Resources/Public/Icons/job.svg',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                --div--;General,
                    title, department, job_type, location, deadline, is_internship,
                --div--;Details,
                    description, requirements,
                --div--;Access,
                    hidden,
            ',
        ],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => ['type' => 'check', 'renderType' => 'checkboxToggle', 'items' => [['label' => '', 'invertStateDisplay' => true]]],
        ],
        'title' => [
            'label' => 'Job Title',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 255, 'required' => true],
        ],
        'department' => [
            'label' => 'Department',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Management', 'value' => 'management'],
                    ['label' => 'Sales & Distribution', 'value' => 'sales'],
                    ['label' => 'Marketing', 'value' => 'marketing'],
                    ['label' => 'Operations', 'value' => 'operations'],
                    ['label' => 'Human Resources', 'value' => 'hr'],
                    ['label' => 'Finance', 'value' => 'finance'],
                    ['label' => 'IT', 'value' => 'it'],
                    ['label' => 'Engineering', 'value' => 'engineering'],
                    ['label' => 'Quality Control', 'value' => 'quality'],
                ],
            ],
        ],
        'job_type' => [
            'label' => 'Job Type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'Full-time', 'value' => 'full-time'],
                    ['label' => 'Part-time', 'value' => 'part-time'],
                    ['label' => 'Contract', 'value' => 'contract'],
                    ['label' => 'Internship', 'value' => 'internship'],
                ],
            ],
        ],
        'location' => [
            'label' => 'Location',
            'config' => ['type' => 'input', 'size' => 50, 'max' => 255],
        ],
        'deadline' => [
            'label' => 'Application Deadline',
            'config' => ['type' => 'datetime', 'format' => 'date'],
        ],
        'is_internship' => [
            'label' => 'Internship Program',
            'config' => ['type' => 'check', 'renderType' => 'checkboxToggle'],
        ],
        'description' => [
            'label' => 'Job Description',
            'config' => ['type' => 'text', 'rows' => 10, 'cols' => 80, 'enableRichtext' => true],
        ],
        'requirements' => [
            'label' => 'Requirements',
            'config' => ['type' => 'text', 'rows' => 8, 'cols' => 80, 'enableRichtext' => true],
        ],
    ],
];
