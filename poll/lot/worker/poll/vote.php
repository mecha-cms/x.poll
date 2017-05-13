<?php

// icons: <http://icomoon.io>

Shield::get(__DIR__ . DS . '..' . DS . 'poll.php', array_replace([
    'id' => Path::N(__FILE__),
    'a' => [
        '+1' => [
            'i' => '<svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M2.6 12.5l5.4-9 5.4 9z"></path></svg>'
        ],
        '-1' => [
            'i' => '<svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.4 3.5l-5.4 9-5.4-9z"></path></svg>'
        ]
    ]
], !empty($lot) ? $lot : []));