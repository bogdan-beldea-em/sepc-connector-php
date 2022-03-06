<?php

$file = fopen("44.json", "r");
$contents = fread($file, 999999999);
fclose($file);

echo strlen($contents);
echo "\n";

$before = microtime(true);
$obj = json_decode($contents);
$after = microtime(true);

echo $after - $before;

echo "\n";