<?php 
// Using array_rand
header("Location:" . array_rand(["link1", "link2", "link3"]));

// Using rand
header("Location:" . ['link1', 'link2', 'link3'][rand(0, 2)]);

// Link Rotator
$u = ['/link1', '/link2', '/link3']; $f = './count.txt'; file_put_contents($f, ++$i = +file_get_contents($f)) % 3 && header("Location:$u[$i]");
