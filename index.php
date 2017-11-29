<?session_start();?>
<html lang="en">
    <?include 'content/header.php';?>
    <body>
        <form action="reg.php" method="POST" name="registration">
            <p>Придумайте логин</p> 
            <input type="text" maxlength="20" name='login' placeholder="Login">
            <p>Придумайте пароль</p>
            <input type="password" maxlength="32" name='password' placeholder="Password">
            <p>Повторите пароль</p>
            <input type="password" maxlength="32" name='password_r' placeholder="Repeat passsword">
            <br>
            <button type='submit'>Подтвердить</button>
        </form>
        <br>
        <hr>
        <form action="php/sign.php" method="POST" name="registration">
            <p>Логин</p> 
            <input type="text" maxlength="20" name='login' placeholder="Login">
            <p>Пароль</p>
            <input type="password" maxlength="32" name='password' placeholder="Passsword">
            <br>
            <button type='submit'>Подтвердить</button>
        </form>
    </body>
    <hr>
    <center><?include 'content/footer.php';?></center>
    
</html>