<?php

$filename = "nonexistent.txt";
if(file_exists($filename)) {
    if(fopen($filename))
        echo "<h1>1. Файл отркыт</h1>";
    else echo "<h1>1. Ошибка при отркытии файла</h1>";
}
else echo "<h1>1. Такого файла не существует</h1>";