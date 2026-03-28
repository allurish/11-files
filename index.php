
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    ?>
    
    <form method="POST" action="">
        <label for="date1">Первая дата:</label>
        <input type="text" name="date1" id="date1" placeholder="2000-01-01">
        <br><br>
        <label for="date2">Вторая дата:</label>
        <input type="text" name="date2" id="date2" placeholder="2000-01-01">
        <br><br>
        <button type="submit">Сравнить</button>
    </form> 
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['date1']) && isset($_POST['date2']) && 
            !empty($_POST['date1']) && !empty($_POST['date2'])) {
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];
            echo "7. Большая дата: ";
            if ($date1 > $date2) {
                echo date('Y-m-d', strtotime($date1));
            } elseif ($date1 < $date2) {
                echo date('Y-m-d', strtotime($date2));
            } else {
                echo "даты равны";
            }
        } else {
            echo "<p style='color: red;'>Заполните обе даты!</p>";
        }
    }

    $date = '2002-09-24';
    echo '<br>8. ' . $date . ' -> ' . date('d-m-Y', strtotime($date)) . '<br>';
 
    $date = date_create('2000-02-03');
    echo '9.1. ' . date_format($date, 'Y.m.d') . ' + 2 дня = ';
    date_modify($date, '+ 2 days');
    echo date_format($date, 'Y.m.d') . '<br>';

    $date = date_create('2000-02-03');
    echo '9.2. ' . date_format($date, 'Y.m.d') . ' + 1 месяц 3 дня = ';
    date_modify($date, '+ 1 month 3 days');
    echo date_format($date, 'Y.m.d') . '<br>';

    $date = date_create('2000-02-03');
    echo '9.3. ' . date_format($date, 'Y.m.d') . ' + 1 год = ';
    date_modify($date, '+ 1 year');
    echo date_format($date, 'Y.m.d') . '<br>';

    $date = date_create('2000-02-03');
    echo '9.4. ' . date_format($date, 'Y.m.d') . ' - 3 дня = ';
    date_modify($date, '- 3 days');
    echo date_format($date, 'Y.m.d') . '<br>';

    $now = time();
    $newYear = mktime(0, 0, 0, 1, 1, date('Y') + 1);
    $daysLeft = ceil(($newYear - $now) / (60 * 60 * 24));
    echo "10. До Нового года осталось $daysLeft дней";
    ?>  
</body>
</html>



