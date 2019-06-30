<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Вход в личный кабинет</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <? 
    include "pages/header.php"; 
    ?>
    <main>
    <h1>Вход в личный кабинет</h1>
    <? 
        //после авторизация нужно перезагрузить страницу *личный кабинет*
        //если сменить пользователя так же нужно ее перезагрузить
        //пароль ко всем учетным записям 12345
        include "pages/form.php";

    ?>
    </main>
    <? 
    include "pages/footer.php"; 
    ?>
</body>
</html>