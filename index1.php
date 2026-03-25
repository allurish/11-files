<?php
unlink("test.txt");
unlink("mir.txt");
unlink("/folder/mir.txt");
rmdir("/var/www/alekseeva.net/folder");


chdir('/var/www/alekseeva.net');
$file = fopen("test.txt", 'w+') or
die("не удалось создать файл");
fwrite($file, "Привет, мир!");
fclose($file);
echo "<h1>1. Проверь папку сайта :))</h1>";

$content = htmlentities(file_get_contents("test.txt"));
echo "<h1>2. Содержимое файла test.txt: $content</h1>";

if(!rename("test.txt", "mir.txt"))
    echo "<h1>3. Ошибка переименования файла</h1>";
else echo "<h1>3. Файл успешно переименован</h1>";

if(mkdir("folder", 0775))
    echo "Каталог создан";
else echo "Ошибка при создании каталога";
if(!rename("mir.txt", "/var/www/alekseeva.net/folder/mir.txt"))
    echo "<h1>4. Ошибка перемещения файла</h1>";
else echo "<h1>4. Файл успешно перемещён в новый каталог</h1>";

chdir('/var/www/alekseeva.net/folder');
if (!copy("mir.txt", "world.txt"))
    echo "<h1>5. Ошибка копирования файла</h1>";
else echo "<h1>5. Файл скопирован, проверь папку</h1>";

$bSize = filesize("world.txt");
$mbSize = $bSize / 1024 / 1024;
$gbSize = $mbSize / 1024;
echo "<h1>6. Размер файла в байтах: $bSize, 
в мегабайтах: $mbSize, в гигабайтах: $gbSize</h1>";

if (unlink("world.txt")) 
    echo "<h1>7. Файл ворлд.тхт удалён</h1>";
else echo "<h1>7. Ошибка при удалении файла ворлд.тхт</h1>";

if(file_exists("world.txt"))
    echo "<h1>8. Файл ворлд.тхт существует</h1>";
else echo "<h1>8. Файл ворлд.тхт не существует</h1>";
if(file_exists("mir.txt"))
    echo "<h1>8. Файл мир.тхт существует</h1>";
else echo "<h1>8. Файл мир.тхт не существует</h1>";
