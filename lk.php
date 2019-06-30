<?
        include "config.php";
        $login = strip_tags($_POST['login']);
        $pass = strip_tags($_POST['pass']);
        $pass = md5($pass);
        $sql = "select * from `user` where `login` like '$login'";
        if ((mysqli_query($connect,$sql))>0){
            $res = mysqli_query($connect,$sql);
            while($lk = mysqli_fetch_assoc($res)){  
                if($lk['pass']==$pass){
                        $id=$lk['id'];
                        setcookie("id","$id");
                        setcookie("error","");
                }
                else {
                    setcookie("id","-1");
                    setcookie("error","Неверное имя пользователя или пароль");
                }
            }
        }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <? 
    include "pages/header.php"; 
    ?>
    <main>
    <h1>Личный кабинет</h1>
    <? 
        include "pages/form_enter.php";

    ?>
    </main>
    <? 
    include "pages/footer.php"; 
    ?>
</body>
</html>