<?php

return [
    'host' => '0.0.0.0',
    'port' => 22,
    'server_type' => 'http',
    'servers' => [
        'http' => [
            'drive' => Swoole\Http\Server::class,
            'params' => [],
        ],
        'web_socket' => [
            'drive' => \Swoole\WebSocket\Server::class,
            'params' => [],
        ],
        'tcp' => [
            'drive' => \Swoole\Server::class,
            'params' => [],
        ],
        'udp' => [
            'drive' => \Swoole\Server::class,
            'params' => [],
        ],
    ],
    'settings' => [
        'package_max_length' => 1024 * 1024 * 10//单位：B
    ],
    'events' => [
        'start' => \CrCms\Foundation\Swoole\Events\StartEvent::class,
        'worker_start' => \CrCms\Foundation\Swoole\Events\WorkerStartEvent::class,
        'worker_stop' => '',
        'worker_exit' => '',
        'connect' => '',
        'receive' => '',
        'packet' => '',
        'close' => \CrCms\Foundation\Swoole\Events\CloseEvent::class,
        'buffer_full' => '',
        'Buffer_empty' => '',
        'task' => '',
        'finish' => '',
        'pipe_message' => '',
        'worker_error' => '',
        'manager_start' => '',
        'manager_stop' => '',

        'http' => [
            'request' => \CrCms\Foundation\Swoole\Events\Http\RequestEvent::class,
        ],

        'web_socket' => [
            'open'=>\CrCms\Foundation\Swoole\Events\WebSocket\OpenEvent::class,
            'message' => \CrCms\Foundation\Swoole\Events\WebSocket\MessageEvent::class,
        ]
    ]
];