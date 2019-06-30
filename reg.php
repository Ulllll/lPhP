<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <? 
    include "pages/header.php"; 
    ?>
    <main>
    <h1>Регистрация</h1>
    <form action="user_add.php" method="post">
        <input required class="login" type="text" name="login" placeholder="Введите логин"><br><br>
        <input required class="login" type="password" name="pass" placeholder="Введите пароль"><br><br>
        <input required class="login" type="text" name="name" placeholder="Введите имя"><br><br>
        <input required class="login" type="email" name="email" placeholder="Введите email"><br><br>
        <input type="submit" name="submit" value="Зарегистрироваться" />
    </form>
    </main>
    <? 
    include "pages/footer.php"; 
    ?>
</body>
</html>