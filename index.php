<?php
if(file_exists("test"))
    echo "<h1>1. Папка с названием тест уже существует</h1>";
else {
    if (mkdir("test"))
        echo "<h1>1. Папка тест успешно создана</h1>";
    else echo "<h1>1. Ошибка при создании папки тест</h1>";
}

if(file_exists("www"))
    echo "<h1>2. Папка с названием ввв уже существует</h1>";
else {
    if(rename("test", "www"))
        echo "<h1>2. Папка тест успешно переименована</h1>";
    else echo "<h1>2. Ошибка при переименовании папки тест</h1>";
}

if(rmdir("www"))
    echo "<h1>3. Папка ввв успешно удалена</h1>";
else echo "<h1>3. Ошибка при удалении папки ввв</h1>";

$folders = ["topSecret", "myFolder", "kittens"];
foreach ($folders as $f) {
    if(file_exists($f))
    echo "<h2>Папка с названием $f уже существует</h1>";
else {
    if (mkdir($f))
        echo "<h2>Папка $f успешно создана</h1>";
    else echo "<h2>Ошибка при создании папки $f</h1>";
}
}

foreach(glob("*.jpg") as $pic)
    echo basename($pic) . "<br>";
