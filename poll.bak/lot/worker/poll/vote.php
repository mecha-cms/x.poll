<?php

// icons: <http://icomoon.io>

Shield::get(__DIR__ . DS . '..' . DS . 'poll.php', extend([
    'id' => Path::N(__FILE__),
    'a' => [
        '+1' => [
            'i' => ['0 0 16 16', 'M2.6 12.5l5.4-9 5.4 9z']
        ],
        '-1' => [
            'i' => ['0 0 16 16', 'M13.4 3.5l-5.4 9-5.4-9z']
        ]
    ]
], !empty($lot) ? $lot : []));