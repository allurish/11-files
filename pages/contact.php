<?php
// Подключаем функции для обработки формы
require_once '../includes/function.php';

$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    $result = saveMessage($name, $email, $message);
    
    if ($result['success']) {
        $success_message = 'Спасибо! Ваше сообщение отправлено. Мы свяжемся с вами в ближайшее время.';
        // Очищаем поля, но лучше не очищать через JS, а просто показать сообщение
        $_POST = [];
    } else {
        $error_message = $result['error'];
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Связаться с нами - BerryFarm</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="/favicon.png" type="image/x-icon">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>Напишите нам</h1>
        <p>Есть вопросы? Хотите забронировать сбор ягод или узнать о наличии? Заполните форму — мы ответим в течение дня.</p>
        
        <?php if ($success_message): ?>
            <div class="message-success"><?= htmlspecialchars($success_message) ?></div>
        <?php endif; ?>
        
        <?php if ($error_message): ?>
            <div class="message-error"><?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>
        
        <form method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Ваше имя" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Ваш Email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
            </div>
            <div class="form-group">
                <textarea name="message" placeholder="Ваше сообщение" required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
            </div>
            <button type="submit">Отправить сообщение</button>
        </form>
    </main>
    <?php include '../includes/footer.php'; ?>
    <script src="/assets/js/script.js"></script>
</body>
</html>