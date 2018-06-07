<?php
return [
    'app' => [
        'name' => 'Husky.Common',
        'base_url' => 'common.cloud.lruurl.com',
        'enable_debug' => true,
    ],
    'runtime' => [
        'dependencies' => [
            'Logger' => [
                'path' => __DIR__ . '/../logs/',
            ],
            'Cache' => [
                'driver' => 'redis',
                'host' => 'localhost',
                'port' => 6379,
            ],
            'Db' => [
                'url' => 'mysql://root:123456@localhost/mysql',
            ],
        ],
    ]
];
