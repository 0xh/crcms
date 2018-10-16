<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Swoole servers
    |--------------------------------------------------------------------------
    |
    | All swoole server collections
    |
    */

    'servers' => [
        'micro-service' => [
            'host' => '0.0.0.0',
            'port' => 22,
            'mode' => defined('SWOOLE_PROCESS') ? SWOOLE_PROCESS : 3,
            'type' => defined('SWOOLE_SOCK_TCP') ? SWOOLE_SOCK_TCP : 1,
            'settings' => [
                'log_file' => storage_path('logs/micro-service.log')
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | ProcessManager file
    |--------------------------------------------------------------------------
    |
    | Information file for saving all running processes
    |
    */

    'process_file' => storage_path('process.pid'),

    /*
    |--------------------------------------------------------------------------
    | Swoole Process Prefix
    |--------------------------------------------------------------------------
    |
    | Server process name prefix
    |
    */

    'process_prefix' => 'swoole',
];