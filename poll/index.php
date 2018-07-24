<?php

Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'poll.min.css');
Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'js' . DS . 'poll.min.js', null, [
    'data[]' => [
        'token' => Guardian::token('poll')
    ]
]);

function fn_poll_id($id, $key) {
    return 'i:' . dechex(crc32($id . ':' . $key));
}

function fn_poll_yield($content) {
    if (!$defer = Config::get('poll')) {
        return $content;
    }
    $s = "";
    foreach ((array) $defer as $k => $v) {
        $ss = $id = "";
        if (isset($v->i)) {
            foreach ($v->i as $kk => $vv) {
                $id = fn_poll_id($k, $kk);
                if (is_array($vv) || is_object($vv)) {
                    $vv = (array) $vv;
                    $ss .= '<symbol id="' . $id . '" viewBox="' . $vv[0] . '">' . (strpos($vv[1], '<') === 0 ? $vv[1] : '<path d="' . $vv[1] . '"></path>') . '</symbol>';
                } else {
                    $ss .= str_replace([
                        '<svg>',
                        '<svg ',
                        '</svg>'
                    ], [
                        '<symbol id="' . $id . '">',
                        '<symbol id="' . $id . '" ',
                        '</symbol>'
                    ], $vv);
                }
            }
            $s .= $ss;
        }
    }
    $s = '<svg version="' . Extend::state('poll', 'svg', '1.1') . '" id="svg:poll" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" display="none">' . $s . '</svg>';
    if (strpos($content, '<body>') === false) {
        return preg_replace_callback('#<body\s+[^<>]*?>#', function($m) use($s) {
            return $m[0] . $s;
        }, $content);
    }
    return str_replace('<body>', '<body>' . $s, $content);
}

Hook::set('shield.yield', 'fn_poll_yield');

foreach (g(__DIR__ . DS . 'lot' . DS . 'worker', 'php') as $v) {
    Shield::set(Path::N($v), $v);
}

foreach (g(__DIR__ . DS . 'lot' . DS . 'worker' . DS . 'poll', 'php') as $v) {
    Shield::set('poll/' . Path::N($v), $v);
}

require __DIR__ . DS . 'lot' . DS . 'worker' . DS . 'worker' . DS . 'route.php';