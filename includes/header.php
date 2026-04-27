<?php
// Определяем текущую страницу для подсветки активного пункта меню
$current_page = basename($_SERVER['SCRIPT_NAME']);

$menuItems = [
    'Главная' => '/index.php',
    'О нас' => '/pages/about.php',
    'Контакты' => '/pages/contact.php'
];
?>

<header>
    <nav>
        <div class="logo">
            <img src="../favicon.png" alt="Логотип фермы ягод">
            <span>BerryFarm</span>
        </div>
        <ul>
            <?php foreach ($menuItems as $title => $url): ?>
                <?php
                // Определяем активный пункт по имени файла
                $is_active = false;
                if ($title == 'Главная' && $current_page == 'index.php') $is_active = true;
                if ($title == 'О нас' && $current_page == 'about.php') $is_active = true;
                if ($title == 'Контакты' && $current_page == 'contact.php') $is_active = true;
                ?>
                <li>
                    <a href="<?= $url ?>" <?= $is_active ? 'class="active"' : '' ?>>
                        <?= $title ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>