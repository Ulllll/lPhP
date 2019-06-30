<?
$id = $_SERVER['REQUEST_URI']; 
$id = substr($id, -5, 1);
include "../config.php";
$sql = "select * from `products` where id like ".$id;
$res = mysqli_query($connect,$sql);
        while($product = mysqli_fetch_assoc($res)){
            $img_src = "../".$product['src'];
            echo "<div class=\"product\"><div><a href=".$img_src." data-lightbox=\"image".$id."\"><img src=".$img_src." alt=\"Электросамокат\"></a></div>
                <div class=\"product_text\">
                <h3>".$product['name']."</h3>
                <p><span>".$product['price']."</span> рублей</p>
                <a class=\"buy_now\"href=\"../cart.php\">Оформить заказ</a>
                </div><p class = \"detail\">".$product['detail']."</p></div>";
        }

?>
