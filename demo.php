<?php

$file_name = "search.txt";
$pattern = "[\[.*?\]]";

$file = fopen($file_name, "r") or die("Unable to open file!");
$content = fread($file,filesize($file_name));

preg_match_all($pattern, $content, $matches, PREG_PATTERN_ORDER);

echo "<script>console.log('Pattern Found: " . json_encode($matches) . "' );</script>";

fclose($file);

?>