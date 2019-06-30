<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?
    $k=1;
    include "pages/header.php";
    include "config.php";
    $login = strip_tags($_POST['login']);
    $pass = strip_tags($_POST['pass']);
    $pass = md5($pass);
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $sql4 = "select * from `user`";
    $arr = mysqli_query($connect,$sql4);
        while($r = mysqli_fetch_assoc($arr))
        {
            if ($r['login']==$login){
                $k=0;

            }
        }
    if ($k==1){
                $sql = "insert into user (login, pass, name, email) value ('$login','$pass','$name','$email')";
                mysqli_query($connect,$sql); 
                echo "<main>
                <h1>Регистрация завершена</h1>
                </main>";
        }
    else echo "<main>
                <h1>Данный логин занят, пройдите процедуру регистрации еще раз</h1>
                </main>";
    ?>
    <? 
    include "pages/footer.php"; 
    ?>
</body>
</html>