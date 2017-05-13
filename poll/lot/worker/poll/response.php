<?php

$responses = [];

if (!empty($lot['a'])) {
    foreach ($lot['a'] as $k => $v) {
        $responses[$k]['i'] = $v;
    }
    unset($lot['a']);
}

Shield::get(__DIR__ . DS . '..' . DS . 'poll.php', array_replace([
    'id' => Path::N(__FILE__),
    'a' => $responses
], !empty($lot) ? $lot : []));