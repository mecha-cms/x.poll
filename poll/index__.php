<?php

Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'poll.min.css');
Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'js' . DS . 'poll.min.js');

foreach (g(__DIR__ . DS . 'lot' . DS . 'worker', 'php') as $v) {
    Shield::set(Path::N($v), $v);
}

foreach (g(__DIR__ . DS . 'lot' . DS . 'worker' . DS . 'poll', 'php') as $v) {
    Shield::set('poll/' . Path::N($v), $v);
}

require __DIR__ . DS . 'lot' . DS . 'worker' . DS . 'worker' . DS . 'route.php';