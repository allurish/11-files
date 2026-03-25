<?php
chdir('/var/www/alekseeva.net');
$file = fopen("test.txt", 'w') or
die("не удалось создать файл");
fwrite($file, "Привет, мир!");
fclose($file);

echo "<h1>Проверь папку сайта :))</h1>";

