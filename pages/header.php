<?
$ul = "<ul>";
for ($i=0;$i<7;$i++){
    switch($i){
        case 0:
            $type="Главная";
            $src_type ="../index.php";
            break;
        case 1:
            $type="Каталог";
            $src_type ="../catalog.php";
            break;
        case 2:$type="Отзывы";
            $src_type ="../review.php";
            break;
        case 3:$type="Регистрация";
            $src_type ="../reg.php";
            break;
        case 4:$type="Вход";
            $src_type ="../enter.php";
            break;
        case 5:$type="Личный кабинет";
            $src_type ="../lk.php";
            break;
        case 6:$type="Корзина";
            $src_type ="../cart.php";
            break;
    }
    $ul.="<li><a href=".$src_type.">".$type."</a></li>";
}
$ul.="</ul>";
$header = "<header>".$ul."</header>";
echo "$header";
?>

