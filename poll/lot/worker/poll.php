<?php

$id = isset($lot['id']) ? $lot['id'] : Path::N(__FILE__);

$path = isset($lot['path']) ? $lot['path'] : 'page/' . $url->path;
$data = e(File::open(LOT . DS . $path . DS . 'poll.data')->read([]));

$a = isset($lot['a']) ? $lot['a'] : [];
$speak = a($language->poll);

foreach ($a as $k => $v) {
    if (!isset($data[$k])) {
        Cookie::reset('poll.' . md5($k . ':' . $path));
    }
}

?>
<div class="poll poll-<?php echo $id; ?> p" data-token="<?php echo $token; ?>" data-url="<?php echo $url . '/' . Extend::state('poll', 'path', '-poll') . '/' . $path; ?>">
  <?php if (isset($lot['q'])): ?>
  <h4 class="poll--q"><?php echo $lot['q']; ?></h4>
  <?php endif; ?>
  <?php if (isset($lot['h'])): ?>
  <div class="poll--h"><?php echo '<p>' . str_replace(["\n\n", "\n"], ['</p><p>', '<br>'], n(To::text($lot['h'], HTML_WISE_I, true))) . '</p>'; ?></div>
  <?php endif; ?>
  <p class="poll--a">
    <?php foreach ($a as $k => $v): ?>
    <?php $done = Cookie::get('poll.' . md5($k . ':' . $path)); ?>
    <span class="poll:<?php echo $k . ($done ? ' freeze' : ""); ?>" data-key="<?php echo $k; ?>"<?php echo (isset($v['title']) ? ' title="' . $v['title'] . '"' : (isset($speak[$id][$k]) ? ' title="' . $speak[$id][$k] . '"' : "")); ?>><span><button><?php echo isset($v['i']) ? $v['i'] : $k; ?></button><i><?php echo isset($data[$k]) ? $data[$k] : 0; ?></i></span></span>
    <?php endforeach; ?>
  </p>
</div>