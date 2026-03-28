
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
    echo '8. ' . $date . ' -> ' . date('d-m-Y', strtotime($date)) . '<br>';
    ?>  
</body>
</html>



