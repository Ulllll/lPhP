<?
include "config.php";
$sql = "select * from `products`";
$res = mysqli_query($connect,$sql);
        while($products = mysqli_fetch_assoc($res)){
            $name = str_replace(" ","",$products['name']);
            $name = mb_strtolower($name);
            $name = str_replace(".","",$name);
            $detail_page = 'products/'.$name.$products['id'].'.php';
            echo "<div class=\"products_content\">
            <a class=\"product_name\"href=".$detail_page."><h3>".$products['name']."</h3></a>
            <a href=".$detail_page."><img class=\"img\"src=".$products['src']." alt=\"Электросамокат\"></a>
            <p><span>".$products['price']."</span> руб</p>
            <a class = \"buy\" href=".$detail_page.">Купить</a>
            </div>";
        }
?>
