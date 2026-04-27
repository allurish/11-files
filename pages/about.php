<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас - BerryFarm</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="/favicon.png" type="image/x-icon">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    <main>
        <h1>О нашей ферме</h1>
        <p>Ферма BerryFarm была основана в 2015 году. Мы начали с небольшого участка клубники, а сегодня выращиваем малину, смородину, голубику и ежевику на 5 гектарах экологически чистой земли.</p>
        
        <!-- ДВЕ КОЛОНКИ РЯДОМ -->
        <div class="about-grid">
            <!-- Левая колонка: фото основателей -->
            <div class="about-col">
                <div class="photo-card">
                    <img src="/assets/images/about1.jpg" alt="Семейная пара держит в руках ведро с разноцветными ягодами, улыбаясь">
                    <div class="caption">Основатели фермы — Марина и Алексей</div>
                </div>
            </div>
            
            <!-- Правая колонка: контакты -->
            <div class="about-col">
                <h2>Наши контакты</h2>
                <p><strong>📍 Адрес:</strong> Московская область, Раменский район, деревня Ягодная, д. 15</p>
                <p><strong>📞 Телефон:</strong> <a href="tel:+79161234567">+7 (916) 123-45-67</a></p>
                <p><strong>✉️ Email:</strong> <a href="mailto:hello@berryfarm.ru">hello@berryfarm.ru</a></p>
                <p><strong>🕒 Часы работы:</strong> Ежедневно с 9:00 до 20:00</p>
            </div>
        </div>
        
    </main>
    <?php include '../includes/footer.php'; ?>
    <script src="/assets/js/script.js"></script>
</body>
</html>