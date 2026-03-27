<?php
date_default_timezone_set('Europe/Moscow');
$march12 = mktime(10, 25, 0, 3, 15, 2025);
echo date('1. H:i:s d.m.Y', $march12) . '<br>';

echo '2. ' . time() - mktime(8, 5, 59, 10, 2, 1990) . ' секунд<br>';

echo date('3. Y.m.d H:i:s') . '<br>';

echo date('4. Y.m.d', mktime(0,0,0,9,1)) . '<br>';

echo date('5. d.m.Y - l', mktime(0,0,0,2,2,2000)) . '<br>';

$week = ["воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота"];
$date = mktime(0, 0, 0, 6, 12, 2016);
$index = date('w', $date);
echo "6.1. " . date('d.m.Y', $date) . " - " . $week[$index] . '<br>';
$birthday = mktime(0, 0, 0, 11, 27, 2007);
$index = date('w', $birthday);
echo "6.2. " . date('d.m.Y', $birthday) . " - " . $week[$index] . '<br>';

