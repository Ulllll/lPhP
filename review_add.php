<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Спасибо за отзыв</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?
    $name = strip_tags($_POST['name_user']);
    $text = strip_tags($_POST['text_review']);
    include "config.php";
    $sql = "insert into review (name, text_review) value ('$name','$text')";
    mysqli_query($connect,$sql); 
    include "pages/header.php";
    ?>
    <main>
    <h3 class="thank">Спасибо за отзыв!</h3>
    </main>
    <?include "pages/footer.php";?>
</body>
</html>


