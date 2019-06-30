<?
    $id=$_COOKIE['id'];
    $name = strip_tags($_POST['name']);
    $pass = strip_tags($_POST['pass']);
    $pass = md5($pass);
    $email = strip_tags($_POST['email']);
    include "config.php";
    $sql3 = "UPDATE `user` SET `email`=\"".$email."\" ,`name`=\"".$name."\" ,`pass`=\"".$pass."\" WHERE `id` like \"".$id."\"";
    mysqli_query($connect,$sql3); 
    header("Location: lk.php");
?>