<?php
// Функция для сохранения сообщения из формы в файл
function saveMessage($name, $email, $message) {
    $file = __DIR__ . '/../messages.txt';
    
    $name = trim(htmlspecialchars($name));
    $email = trim(htmlspecialchars($email));
    $message = trim(htmlspecialchars($message));
    
    // Простая валидация
    if (empty($name) || empty($email) || empty($message)) {
        return ['success' => false, 'error' => 'Заполните все поля'];
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['success' => false, 'error' => 'Введите корректный email'];
    }
    
    $date = date('Y-m-d H:i:s');
    $entry = "---\nДата: $date\nИмя: $name\nEmail: $email\nСообщение: $message\n---\n\n";
    
    if (file_put_contents($file, $entry, FILE_APPEND | LOCK_EX)) {
        return ['success' => true];
    } else {
        return ['success' => false, 'error' => 'Ошибка сохранения. Попробуйте позже.'];
    }
}
?>