<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Приветствие</title>
</head>
<body>
  <h1>Приветствие</h1>
  <p>Просто файл, который хочет быть добродушным!</p>
  <form method="POST">
      <input type="text" name="name" placeholder="Введите своё имя">
      <input type="submit" value="Отправить">
  </form>
</body>
</html>
<?php
  if (isset($_POST['name'])) {
    print('Привет, ' . $_POST['name']);
  }
?>