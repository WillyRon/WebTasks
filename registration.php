<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация на аттестацию</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container">
            <a class="logo" href="index.html"><img src="./img/logo.png" alt="logo"></a>
            <h1>Программные технологии интернета</h1>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="index.html">О себе</a></li>
                <li><a href="resume.html">Резюме</a></li>
                <li><a href="#">Портфолио</a></li>
                <li><a href="#">Компетенции</a></li>
                <li><a href="component/logout.php">Выход</a></li>
                <li><a href="registration.php">Регистрация на аттестацию</a></li>
            </ul>
        </nav>
    </header>
    <button id="show-list-btn" style="display:block; margin: 0 auto;">Показать список</button>
  <div id="participants-list" style="display:none; text-align:center;">
</div>
    <main>
    <?php
   session_start();
   $is_logged_in = isset($_SESSION['login']);

    if ($is_logged_in) {
        include("component/reginvate.php");
    } else {
        if (isset($_GET['register'])) {
            include("component/reg.php");
        } else {
            include("component/to_log.php");
        }
    }
    ?>
    </main>

    <footer>
        <div>
            <span>Сайт разработан Татлеев Е.А., Copyright © 2023</span>
        </div>
        <div>
            <a href="https://vk.com/"><img src="./img/vkontakte.png" alt="vkontakte"></a>
            <a href="https://www.instagram.com/"><img src="./img/instagram.png" alt="instagram"></a>
            <a href="https://github.com/"><img src="./img/github.png" alt="github"></a>
        </div>
    </footer>
    <script src="script/reg_mess.js"></script>
    <script src="script/List.js"></script>
</body>

</html>