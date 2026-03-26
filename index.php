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

try {
    echo "15 / 5 = " . 15/5 . "<br>";
    echo "169 / 13 = " . 169/13 . "<br>";
    echo "32 / 0 = ";
    echo 32/0 . "<br>";
    echo "32 / 4 = " . 32/4 . "<br>";
} catch(DivisionByZeroError $ex) {
    echo "<h1>2. На ноль делить нельзя</h1>";
}

$capitals = ['Spain' => 'Madrid','Russia' => 'Moscow'];
try {
    $country = 'Spain';
    if(isset($capitals[$country]) )
        echo $country . " - " . $capitals[$country];
    else throw new Exception("<h1>3. Данных о столице страны $country нет</h1>");
    $country = 'Germany';
    if(isset($capitals[$country]) )
        echo $country . " - " . $capitals[$country];
    else throw new Exception("<h1>3. Данных о столице страны $country нет</h1>");
} catch(Exception $ex) {
    echo $ex->getMessage();
}