<div style="width: 100%; max-width: 400px; margin: 0 auto;">
  <form method="post"action="component/auth_script.php" style="background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">
    <p style="text-align: center; font-size: 18px;">Для записи на аттестацию необходимо авторизироваться</p>
    <div style="margin-bottom: 10px;">
      <label for="login" style="display: block; margin-bottom: 5px;">Логин</label>
      <input type="text" name="login" id="login" style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
    </div>
    <div style="margin-bottom: 10px;">
      <label for="pass" style="display: block; margin-bottom: 5px;">Пароль</label>
      <input type="password" name="pass" id="pass" style="width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
    </div>
    <div class="button-container">
      <button type="submit" formaction="component/auth_script.php">Авторизироваться</button>
      <button type="submit" formaction="component/regform.php">Зарегистрироваться</button>
    </div>
  </form>
</div>