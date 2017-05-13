<?php

Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'poll.min.css');
Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'js' . DS . 'poll.min.js');

function fn_poll_path($path, $id) {
    if (($id === 'poll' || strpos($id, 'poll/') === 0) && !$path) {
        return __DIR__ . DS . 'lot' . DS . 'worker' . DS . $id . '.php';
    }
    return $path;
}

Hook::set('shield.get.path', 'fn_poll_path');

require __DIR__ . DS . 'lot' . DS . 'worker' . DS . 'worker' . DS . 'route.php';