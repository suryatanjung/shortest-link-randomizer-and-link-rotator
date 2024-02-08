<?php
// Link Rotator @author github.com/suryatanjung <hi@jung.bz>
$u = ['link1', 'link2', 'link3'];
$f = './count.txt';
$i = ((file_exists($f) ? file_get_contents($f) : -1) + 1) % count($u);
file_put_contents($f, $i);
header("Location:$u[$i]");
