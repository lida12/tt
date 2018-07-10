<?php
$data = file_get_contents('https://en.wikipedia.org/wiki/PHP');
$file = fopen("temp/Wiki-PHP.html", "w") or die("Unable to open file!");
fwrite($file, $data);
?>
