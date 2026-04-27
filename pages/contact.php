<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Связаться с нами</title>
    <link rel="icon" href="../favicon.png" type="image/x-icon">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>Связаться с нами</h1>
        <form method="post">
            <input type="text" name="name" placeholder="Имя">
            <input type="email" name="email" placeholder="Email">
            <textarea name="message"></textarea>
            <button type="submit">Отправить</button>
        </form>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>

