<?
include "config.php";
$id=$_COOKIE['id'];
$error=$_COOKIE['error'];
        $sql = "select * from `user` where `id` like '$id'";
        if ((mysqli_query($connect,$sql))>0){
            $res = mysqli_query($connect,$sql);
            while($lk1 = mysqli_fetch_assoc($res)){         
                 echo "<div class=\"autor\">
        <form action=\"save_new_data.php\" method=\"post\">
      <p>Имя <input type=\"text\" name = \"name\" value=".$lk1['name']."></p>
        <p>Пароль <input type=\"password\" name = \"pass\" value =".$lk1['pass']."></p>
        <p>E-mail <input type=\"email\" name = \"email\" value=".$lk1['email']."></p>
        <input type=\"submit\" name=\"submit\" value=\"Сохранить данные\" />
  </form>
   
    </div>";
     
            }
        }
?>
   
    