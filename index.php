<?php
date_default_timezone_set('Europe/Moscow');
$march12 = mktime(10, 25, 0, 3, 15, 2025);
echo date('1. H:i:s d.m.Y', $march12) . '<br>';

echo '2. ' . time() - mktime(8, 5, 59, 10, 2, 1990) . ' секунд<br>';

echo date('3. Y.m.d H:i:s') . '<br>';

echo date('4. Y.m.d', mktime(0,0,0,9,1)) . '<br>';