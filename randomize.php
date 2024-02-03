<?php 
// Using array_rand
header("Location:" . array_rand(["link1", "link2", "link3"]));

// Using rand
header("Location:" . ['link1', 'link2', 'link3'][rand(0, 2)]);

// Link Rotator
$u = ['https://google.com', 'https://facebook.com', 'https://twitter.com'];
$f = './count.txt';
$i = ((file_exists($f) ? file_get_contents($f) : -1) + 1) % count($u);
file_put_contents($f, $i);
header("Location:$u[$i]");

// Code by github.com/suryatanjung
