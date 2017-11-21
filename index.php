<?php
    session_start();
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
    <body>
    <h1>Главная</h1>
        <div>
        <h2>Вход</h2>
            <form action="php/login.php" method='POST' name="login">
                <p>Логин</p>
                <input type="text" maxlength=20>
                <p>Пароль</p>
                <input type="password" maxlength=32>
                <button type="submit">SIGN IN</button>
            </form>
        </div>
        <div> 
        <h2>Регистрация</h2>
            <form action="php/registration.php" method='POST' name="login">
                <p>Логин</p>
                <input type="text" maxlength=20>
                <p>Пароль</p>
                <input type="password" maxlength=32>
                <p>Повтор пароля</p>
                <input type="password" maxlength=32>
                <button type="submit">SIGN IN</button>
            </form>
        </div>
    </body>
</html>