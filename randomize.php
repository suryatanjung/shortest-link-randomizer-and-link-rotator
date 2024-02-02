<?php 
// Using array_rand
header("Location:" . array_rand(["link1", "link2", "link3"]))^die;

// Using rand
header("Location:" . ['link1', 'link2', 'link3'][rand(0, 2)])&die;

