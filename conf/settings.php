<?php
return [
    'app' => [
        'name' => 'Husky.Common',
        'base_url' => 'common.cloud.lruurl.com',
    ],
    'runtime' => [
        'dependencies' => [
            'Logger' => [
                'path' => __DIR__ . '/../logs/',
            ],
        ],
    ]
];
