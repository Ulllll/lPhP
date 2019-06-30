<?
    $count=3;
    $yes=0;
    $id=$_SERVER['HTTP_REFERER'];
    $id = substr($id, -5, 1);
    while($yes==0){
    $catch='products'.$count;
    if (isset($_COOKIE[$catch]))
    {
        $yes=0;
        $count++;
    }
    else {
        setcookie($catch,$id);
        $idd = $_COOKIE[$catch];
        $yes=1;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Корзина</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <? include "pages/header.php"; ?>
    <main>
    <h1>Корзина</h1>
    <?
    $count=3;
    $yes=0;
    while($yes==0){
    $catch='products'.$count;
    if (isset($_COOKIE[$catch]))
    {
        $idd = $_COOKIE[$catch];
        include "config.php";
            $sql = "select * from `products` where `id` like \"$idd\"";
            $res = mysqli_query($connect,$sql);
            while($products = mysqli_fetch_assoc($res)){
            echo "<div class=\"cart\">
        <img src=".$products['src']." alt=\"Электросамокат\">
        <div class=\"name\">".$products['name']."</div>
        <div class=\"price\">".$products['price']."<p> рублей</p></div>
        </div>";
        }
        $count++;
    }
    else $yes=1;
    }
    ?>
    <div class="space"><?echo "$idd";?></div>
    </main>
    <? include "pages/footer.php"; ?>
</body>
</html>
