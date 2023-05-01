<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация на аттестацию</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <div class="container">
            <a class="logo" href="../index.html"><img src="../img/logo.png" alt="logo"></a>
            <h1>Программные технологии интернета</h1>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="../index.html">О себе</a></li>
                <li><a href="../resume.html">Резюме</a></li>
                <li><a href="#">Портфолио</a></li>
                <li><a href="#">Компетенции</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="../registration.php">Регистрация на аттестацию</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <div style="width: 100%; max-width: 400px; margin: 0 auto;">
  <form method="post" action="reg_script.php" style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
    <p style="text-align: center; font-size: 18px;">Ведите логин и пароль</p>
    <div style="margin-bottom: 10px;">
      <label for="login" style="display: block; margin-bottom: 5px;">Логин</label>
      <input type="text" name="login" id="login" style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
    </div>
    <div style="margin-bottom: 10px;">
      <label for="password" style="display: block; margin-bottom: 5px;">Пароль</label>
      <input type="password" name="password" id="password" style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
    </div>
    <div class="button-container">
      <button type="submit">Зарегистрироваться</button>
    </div>
  </form>
</div>
    </main>

    <footer>
        <div>
            <span>Сайт разработан Татлеев Е.А., Copyright © 2023</span>
        </div>
        <div>
            <a href="https://vk.com/"><img src="../img/vkontakte.png" alt="vkontakte"></a>
            <a href="https://www.instagram.com/"><img src="../img/instagram.png" alt="instagram"></a>
            <a href="https://github.com/"><img src="../img/github.png" alt="github"></a>
        </div>
    </footer>
</body>

</html>