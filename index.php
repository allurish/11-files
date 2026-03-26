<?php

$filename = "nonexistent.txt";

try {
    if(!file_exists($filename))
        throw new Exception("<h1>1. Ошибка: такого файла не существует</h1>");
    $file = fopen($filename, 'r');
    echo "<h1>1. Файл отркыт</h1>";
    fclose($file);
} catch(Exception $ex) {
    echo $ex->getMessage();
    }