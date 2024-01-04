<?php

$id = isset($lot['id']) ? $lot['id'] : Path::N(__FILE__);

$path = isset($lot['path']) ? $lot['path'] : Path::F(PAGE, LOT, '/') . '/' . $url->path;
$state = Extend::state('poll');

$data = e(File::open(LOT . DS . $path . DS . 'poll.data')->read([]));

$a = isset($lot['a']) ? $lot['a'] : [];
$speak = a($language->poll);
$icons = [];
foreach ($a as $k => $v) {
    if (isset($v['i'])) {
       $icons[$k] = $v['i'];
    }
    if (!isset($data->{$k})) {
        Cookie::reset('poll.' . dechex(crc32($k . ':' . $path)));
    }
}

if (!Config::get($x = 'poll.' . $id . '.i')) {
    Config::set($x, $icons);
}

$ii = Config::set('poll_id', Config::get('poll_id', 0) + 1)->get('poll_id');

?>
<div class="poll poll-<?php echo $id; ?> p" data-path="<?php echo $path; ?>" id="poll:<?php echo $id . ('-' . $ii); ?>">
  <?php if (isset($lot['q'])): ?>
  <h4 class="poll--q"><?php echo $lot['q']; ?></h4>
  <?php endif; ?>
  <?php if (isset($lot['h'])): ?>
  <div class="poll--h"><?php echo '<p>' . str_replace(["\n\n", "\n"], ['</p><p>', '<br>'], n(To::text($lot['h'], HTML_WISE_I, true))) . '</p>'; ?></div>
  <?php endif; ?>
  <?php $done_any = $s = ""; foreach ($a as $k => $v): ?>
  <?php $done = Cookie::get('poll.' . dechex(crc32($k . ':' . $path))); ?>
  <?php if ($done) $done_any = true; ?>
  <?php $s .= '<span class="poll:' . $k . ($done ? ' freeze' : "") . '" data-key="' . $k . '"' . (isset($v['title']) ? ' title="' . $v['title'] . '"' : (isset($speak[$id][$k]) ? ' title="' . $speak[$id][$k] . '"' : "")) . '><span><button>' . (isset($v['i']) ? '<svg><use href="#' . fn\poll\id($id, $k) . '"></use></svg>' : $k) . '</button><i>' . (isset($data->{$k}) ? $data->{$k} : 0) . '</i></span></span>'; ?>
  <?php endforeach; ?>
  <p class="poll--a<?php echo $done_any ? ' freeze' : ""; ?>"><?php echo $s; ?></p>
</div>