<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Отзывы</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <? 
    include "pages/header.php"; 
    ?>
    <main>
    <h1>Отзывы</h1>
    <? 
    include "review_all.php"; 
    ?>
    <h4>Оставьте свой отзыв!</h4>
    <form action="review_add.php" method="post">
        <input class="input_name"type="text" name="name_user" placeholder="Введите имя"><br><br>
        <textarea class="input_name" name="text_review" id="" cols="30" rows="10" placeholder="Введите текст отзыва"></textarea><br>
        <input type="submit" name="submit" value="Оставить отзыв" />
    </form>
    </main>
    <? 
    include "pages/footer.php"; 
    ?>
</body>
</html>
