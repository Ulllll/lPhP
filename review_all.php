<?
include "config.php";
$sql = "select * from `review`";
$res = mysqli_query($connect,$sql);
        while($review = mysqli_fetch_assoc($res)){
            echo "<div class=\"review\">
            <img src=\"img/user.jpeg\" alt=\"Изображение пользователя\">
            <div class=\"review_text\">
            <p class=\"name_review\">".$review['name']."</p>
            <p class=\"all_text_review\">".$review['text_review']."</p>
            </div>
            </div>";
        }
?>