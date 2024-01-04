<?php namespace x\poll;

function route($content) {
    if ('POST' !== $_SERVER['REQUEST_METHOD']) {
        \status(405);
        return "";
    }
    return $content;
}

\Hook::set('route', __NAMESPACE__ . "\\route", 0);