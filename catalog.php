<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Каталог товаров</title>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link href="lightbox/css/lightbox.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <script src="lightbox/js/lightbox.js"></script>
    <script>
        lightbox.option({
            'wrapAround': true
        })

    </script>
</head>

<body>
    <div class="container">
    <? include "pages/header.php"; ?>
    <main>
        <h1>Каталог товаров</h1>
        <div class="products">
        <?  
         include 'img.php';
        ?>
    </main>
    <? include "pages/footer.php"; ?>
</body>

</html>
