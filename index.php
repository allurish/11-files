<?php

class Page {
    protected string $name;
    protected string $template;
    public function __construct() {
        $this->name = "page";
        $this->template = '<div class="hero">
                <h1>🐾 Лапы, усы и хвост 🐾</h1>
                <p>Два мира — одна любовь. Всё о жизни кошек и собак: от привычек до секретов воспитания.</p>
            </div>

            <div class="features">
                <div class="feature-item">
                    <div class="feature-icon">😻</div>
                    <h3>100+ историй</h3>
                    <p>Забавные случаи, лайфхаки по уходу и наблюдения за привычками питомцев.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📚</div>
                    <h3>Психология животных</h3>
                    <p>Узнайте, почему кошки мурлычат, а собаки ходят за вами по пятам.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🏆</div>
                    <h3>Советы экспертов</h3>
                    <p>Правильное питание, игрушки и создание комфортной среды для питомца.</p>
                </div>
            </div>';
    }
    public function render(): void {
        echo $this->template;
    }
}

class CatBlogPage extends Page {
    
    public function __construct() {
        $this->name = "catBlog";
        
        $this->template = '<div style="text-align: center; margin: 1rem 0 0.5rem;">
                <h1 style="font-size: 2rem; color: #422f1e;">📌 Наши статьи о кошках</h1>
                <p style="color: #936e46;">Уютные заметки, факты и личный опыт</p>
            </div>

            <div class="cards-grid">
                <!-- КАРТОЧКА 1: Кошачья йога -->
                <div class="card">
                    <div class="card-media" style="background: #e6d5b8; background-image: linear-gradient(135deg, #f9e7c2 0%, #eed9b0 100%); font-size: 72px;">
                        🐈‍⬛🧘‍♀️
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Кошачья йога</h3>
                        <div class="card-subtitle">утренние ритуалы</div>
                        <p class="card-text">Каждое утро Мурзик начинает с «позы кошки» — выгибает спину, потягивается и медитирует у окна. Ученые подтверждают: кошачий стретчинг улучшает гибкость и поднимает настроение хозяевам.</p>
                        <div class="card-footer">
                            <span>📅 12 апр 2026</span>
                            <span>🐾 3 мин чтения</span>
                        </div>
                    </div>
                </div>

                <!-- КАРТОЧКА 2: Тайный язык хвоста -->
                <div class="card">
                    <div class="card-media" style="background: #d9e0d5; background-image: linear-gradient(145deg, #ebe3cd, #dbd0b8); font-size: 68px;">
                        🐱💬🔁
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Тайный язык хвоста</h3>
                        <div class="card-subtitle">поведение & жесты</div>
                        <p class="card-text">Хвост трубой — радость и приветствие. Дергающийся кончик — легкое раздражение. А если пушистый друг обвил хвостом вашу ногу — это высший знак доверия. Расшифровываем сигналы без слов.</p>
                        <div class="card-footer">
                            <span>📅 05 апр 2026</span>
                            <span>🐾 4 мин чтения</span>
                        </div>
                    </div>
                </div>

                <!-- КАРТОЧКА 3: Одержимость коробками -->
                <div class="card">
                    <div class="card-media" style="background: #eeddcc; background-image: linear-gradient(120deg, #f5e5cf, #f2dec2); font-size: 70px;">
                        📦🐈✨
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Одержимость коробками</h3>
                        <div class="card-subtitle">наука & факты</div>
                        <p class="card-text">Коробка — идеальное укрытие: снижает стресс, даёт тепло и ощущение безопасности. Исследования показывают: новые кошки адаптируются в приютах быстрее, если им дают картонное убежище. Плюс — идеальная засада для охоты на носки!</p>
                        <div class="card-footer">
                            <span>📅 28 мар 2026</span>
                            <span>🐾 5 мин чтения</span>
                        </div>
                    </div>
                </div>
            </div>

    <div class="footer">
        🐾 Блог о жизни питомцев. 2026 🐾
    </div>';
    }
}
class DogBlogPage extends Page {

    public function __construct() {
        $this->name = "catBlog";
        
        $this->template = '<div style="text-align: center; margin: 1rem 0 0.5rem;">
                <h1 style="font-size: 2rem; color: #422f1e;">📌 Наши статьи о собаках</h1>
                <p style="color: #936e46;">Уютные заметки, факты и личный опыт</p>
            </div>

            <div class="cards-grid">
                <div class="card">
                    <div class="card-media" style="background: #e6d5b8; background-image: linear-gradient(135deg, #f9e7c2 0%, #eed9b0 100%); font-size: 72px;">
                        🐶👃
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Собачий нос — цифровой детектор</h3>
                        <div class="card-subtitle">наука & факты</div>
                        <p class="card-text">У собак более 300 миллионов обонятельных рецепторов (у людей — около 6 миллионов). Они могут учуять запах, который был оставлен несколько часов назад, и даже определять эмоции человека по запаху пота.</p>
                        <div class="card-footer">
                            <span>📅 13 апр 2026</span>
                            <span>🐾 2 мин чтения</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-media" style="background: #d9e0d5; background-image: linear-gradient(145deg, #ebe3cd, #dbd0b8); font-size: 68px;">
                        🐕💬🔁
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Язык хвоста и ушей</h3>
                        <div class="card-subtitle">поведение & жесты</div>
                        <p class="card-text">Виляние хвостом вправо — радость и спокойствие, влево — настороженность. Прижатые уши + поджатый хвост = страх или неуверенность. А медленное виляние с расслабленным телом — знак дружелюбия.</p>
                        <div class="card-footer">
                            <span>📅 08 апр 2026</span>
                            <span>🐾 3 мин чтения</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-media" style="background: #eeddcc; background-image: linear-gradient(120deg, #f5e5cf, #f2dec2); font-size: 70px;">
                        🐕🧠
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Собаки понимают до 250 слов</h3>
                        <div class="card-subtitle">наука & факты</div>
                        <p class="card-text">Интеллект собак сравним с умственными способностями двухлетнего ребёнка. Бордер-колли и пудели способны запоминать более 250 команд и жестов. Некоторые собаки могут решать простые логические задачи.</p>
                        <div class="card-footer">
                            <span>📅 28 мар 2026</span>
                            <span>🐾 2 мин чтения</span>
                        </div>
                    </div>
                </div>
            </div>

    <div class="footer">
        🐾 Блог о жизни питомцев. 2026 🐾
    </div>';
}
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Алексеева А. А. 9ПО-31</title>
    <style>

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    margin: 0;
    background: #f4f7fb;
    font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    line-height: 1.4;
    color: #2c2418;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}

.cards-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 28px;
    justify-content: center;
    align-items: stretch;
    margin: 2rem 0;
}

.card {
    flex: 1;
    min-width: 240px;
    max-width: 320px;
    background: white;
    border-radius: 28px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    display: flex;
    flex-direction: column;
}

.card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 28px rgba(0, 0, 0, 0.08);
}

.card-media {
    height: 180px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 68px;
    background-size: cover;
    transition: all 0.2s;
}

.card-body {
    padding: 22px 20px 20px 20px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.card-title {
    margin: 0 0 8px 0;
    font-size: 1.5rem;
    font-weight: 600;
    color: #2c2418;
    letter-spacing: -0.3px;
}

.card-subtitle {
    margin: 0 0 10px 0;
    font-size: 0.85rem;
    color: #b87333;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 500;
}

.card-text {
    margin: 12px 0 20px 0;
    font-size: 0.95rem;
    color: #3e3a35;
    line-height: 1.45;
}

.card-footer {
    margin-top: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid #f0e3d4;
    padding-top: 14px;
    font-size: 0.75rem;
    color: #aa8e6c;
}

.hero {
    background: linear-gradient(135deg, #f9e7c2 0%, #eed9b0 100%);
    border-radius: 48px;
    padding: 3rem 2rem;
    margin: 2rem 0 2rem 0;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.02);
}

.hero h1 {
    font-size: 2.6rem;
    font-weight: 700;
    color: #3b2a1f;
    letter-spacing: -0.02em;
    margin-bottom: 0.75rem;
}

.hero p {
    font-size: 1.2rem;
    color: #5a3e2b;
    max-width: 600px;
    margin: 0 auto;
}

.features {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
    margin: 3rem 0;
}

.feature-item {
    background: white;
    padding: 1.6rem;
    border-radius: 32px;
    flex: 1;
    min-width: 200px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    transition: all 0.2s;
    border: 1px solid #f3e9de;
}

.feature-icon {
    font-size: 2.8rem;
    margin-bottom: 0.75rem;
}

.feature-item h3 {
    font-size: 1.4rem;
    margin-bottom: 0.5rem;
    color: #4a3624;
}

.feature-item p {
    color: #6b5a48;
    font-size: 0.9rem;
    line-height: 1.4;
}

.btn-group {
    display: flex;
    justify-content: center;
    gap: 24px;
    flex-wrap: wrap;
    margin: 2rem 0 1.5rem;
}

.btn {
    display: inline-block;
    background: #dbb87c;
    color: #2c2418;
    text-decoration: none;
    padding: 12px 28px;
    border-radius: 60px;
    font-weight: 600;
    font-size: 1rem;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    border: none;
    cursor: pointer;
    margin: 10px
}
.btn-secondary {
    display: inline-block;
    background: #423113;
    color: #fdefd8;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 60px;
    font-weight: 400;
    font-size: 0.8rem;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    border: none;
    cursor: pointer;
    margin: 10px 10px 20px 10px;
}

.btn:hover {
    background: #c9a76b;
    transform: translateY(-2px);
}

.btn-outline {
    background: transparent;
    border: 1.5px solid #dbb87c;
    color: #6b4c2c;
}

.btn-outline:hover {
    background: #fef3e4;
    border-color: #c29a5a;
}

.page-header {
    border-bottom: 2px solid #e8dccc;
    padding: 1rem 0;
    margin-bottom: 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    flex-wrap: wrap;
}

.logo {
    font-size: 1.7rem;
    font-weight: 600;
    color: #b1622c;
    letter-spacing: -0.5px;
}

.nav-links a {
    margin-left: 24px;
    text-decoration: none;
    color: #8b6946;
    font-weight: 500;
    transition: color 0.2s;
}

.nav-links a:hover {
    color: #b87333;
    text-decoration: underline;
}

.footer-note {
    text-align: center;
    padding: 28px 16px 36px;
    color: #9b7e62;
    font-size: 0.8rem;
    background: #f4f7fb;
    border-top: 1px solid #e8dccc;
    margin-top: 2rem;
}

.active-page {
    font-weight: 700;
    color: #b87333;
    border-bottom: 2px solid #b87333;
}      

.footer {
    text-align: center; 
    padding: 24px 16px 40px; 
    color: #9b7e62; 
    font-size: 0.8rem; 
    background: #f4f7fb; 
    border-top: 1px solid #e8dccc; 
    margin-top: 12px;
}

    </style>
</head>
<body>

    <h1>Вы кошатница или собачница?</h1>
    <div>
        <a href="?page=catBlog" class="btn">Кошатница</a>
        <a href="?page=dogBlog" class="btn">Собачница</a>
    </div>
    <a href="?page=main" class="btn-secondary">Вернуться на главную</a>
    <hr>

    <?php
    if (isset($_GET['page'])) {
        $pageValue = $_GET['page'];
        
        if ($pageValue === 'catBlog') {
            $blog = new CatBlogPage();
            $blog->render();
        } elseif ($pageValue === 'dogBlog') {
            $page = new DogBlogPage();
            $page->render();
        } elseif ($pageValue === 'main') {
            $page = new Page();
            $page->render();
        }
        else {
            echo "<p style='color: red;'>Ошибка: страница '{$pageValue}' не найдена. Используйте 'catBlog' или 'dogBlog'.</p>";
            }
    } else {
        $page = new Page();
        $page->render();
    }
    ?>

</body>
</html>