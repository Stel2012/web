<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta charset="utf-8">
    <title>Галченко А.В.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="style.css">
</html>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="nav_text">Регистрация:</h1>
            </div>
        </div>
        <div class="row row_reg">
            <div class="col-12">
                <form method="POST" action="rega.php">
                    <div class="row form_reg">Введите почтовый адрес: <input class="form" type="email" name="email" placeholder="user@mail.ru"></div>
                    <div class="row form_reg">Введите логин: <input class="form" type="text" name="username" placeholder="User"></div>
                    <div class="row form_reg">Введите пароль: <input class="form" type="password" name="pass" placeholder="Password"></div>
                    <button type="submit" class="btn_reg" name="submit">Продолжить</button>
                </from>
            </div>
        </div>
    </div>
</body>
</html>

<?php
require_once('db.php');

if (isset($_COOKIE['User'])) {
    header("Location: login.php");
}

$link = mysqli_connect('db', 'root', '123456', 'web');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    if (!$email || !$username || !$pass) die ("Пожалуйста введите все значения!");
    
    $sql = "INSERT INTO users (username, email, pass) VALUES ('$username', '$email', '$pass');";

    if(!mysqli_query($link, $sql)) {
        echo "Не удалось добавить пользователя";
    }
}
?>
