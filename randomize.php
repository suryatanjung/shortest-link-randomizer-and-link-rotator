<?php 
// Using array_rand
header("Location:" . array_rand(["link1", "link2", "link3"]));

// Using rand
header("Location:" . ['link1', 'link2', 'link3'][rand(0, 2)]);

// Link Rotator
$u = ['/link1', '/link2', '/link3']; 
$f = './count.txt'; 
$i = ++file_get_contents($f) % count($u) ?: -1;
header("Location:$u[$i]");
