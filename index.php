<?php
if (unlink("test.txt"))
    echo "Файл удален";
else echo "Ошибка при удалении файла";
if (unlink("mir.txt"))
    echo "Файл удален";
else echo "Ошибка при удалении файла";


chdir('/var/www/alekseeva.net');
$file = fopen("test.txt", 'w') or
die("не удалось создать файл");
fwrite($file, "Привет, мир!");
fclose($file);
echo "<h1>1. Проверь папку сайта :))</h1>";

$content = htmlentities(file_get_contents("test.txt"));
echo "<h1>2. Содержимое файла test.txt: $content</h1>";

if(!rename("test.txt", "mir.txt"))
    echo "<h1>3. Ошибка переименован файла</h1>";
else echo "<h1>3. Файл успешно переименован</h1>";

