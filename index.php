<?php
chdir('/var/www/alekseeva.net');
$file = fopen("test.txt", 'w') or
die("не удалось создать файл");
fwrite($file, "Привет, мир!");
fclose($file);
echo "<h1>1. Проверь папку сайта :))</h1>";

$content = htmlentities(file_get_contents("test.txt"));
echo "<h1>2. Содержимое файла test.txt: $content</h1>";


