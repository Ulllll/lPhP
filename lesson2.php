<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?  //Задание 1
    $a = rand(-10, 10);
    echo "a = $a <br/>";
    $b = rand(-10,10);
    echo "b = $b<br/>";
    if(($a>=0) && ($b>=0)){
        $c = $a-$b;
    }
    if((($a>=0) && ($b<0))||(($a<0) && ($b>=0))){
        $c = $a+$b;
    }
    if(($a<0) && ($b<0)){
        $c = $a*$b;
    }
    echo "c = $c<br/>";
    //Задание 2
    $a = rand(0, 15);
    echo "Значение а для второго задания: = $a<br/>";
    switch($a){
        case 0: echo "0 ";
        case 1: echo "1 ";
        case 2: echo "2 ";
        case 3: echo "3 ";
        case 4: echo "4 ";
        case 5: echo "5 ";
        case 6: echo "6 ";
        case 7: echo "7 ";
        case 8: echo "8 ";
        case 9: echo "9 ";
        case 10: echo "10 ";
        case 11: echo "11 ";
        case 12: echo "12 ";
        case 13: echo "13 ";
        case 14: echo "14 ";
        case 15: echo "15 ";
    }
    //Задание 3
    function sum($a, $b){
        return $a+$b;
    }
    function sub($a, $b){
        return $a-$b;
    }
    function mult($a, $b){
        return $a*$b;
    }
    function div($a, $b){
        return $a/$b;
    }
    //Задание 4
    function mathOperation($arg1, $arg2, $operation){
        switch($operation){
            case "+": $c = sum($arg1, $arg2);
                    break;
            case "-": $c = sub($arg1, $arg2);
                    break;
            case "/": $c = div($arg1, $arg2);
                    break;
            case "*": $c = mult($arg1, $arg2);
                    break;
        }
        return $c;
    }
    
?>
<form action="lesson2.php" method="post">
    Переменная 1  <input type="text" name="arg1"/><br />
    Переменная 2  <input type="text" name="arg2"/><br />
    Операция <input type="text" name="operation" placeholder="Например, +"/><br />
    <input type="submit" name="submit" value="Отправить" />
</form>
<?
$arg1 = $_POST['arg1'];
$arg2 = $_POST['arg2'];
$operation = $_POST['operation'];
$c = mathOperation($arg1, $arg2, $operation);
echo "$c<br/>";
?>
<?  //Задание 6
    function power($val, $pow){
        if ($pow == 0) return 1;
        else return $val*power($val,$pow-1);
    }
?>
<form action="lesson2.php" method="post">
    Число, которое надо возвести в степень  <input type="text" name="val"/><br />
    Степень  <input type="text" name="pow"/><br />
    <input type="submit" name="submit" value="Отправить" />
</form>
<?
$val = $_POST['val'];
$pow = $_POST['pow'];
$c = power($val, $pow);
echo "$c<br/>";
?>
<?  //Задание 7
    $minmin= 0;
    $hour = date("H");
    $minute = date("i");
    if((($minute>1)&&($minute<5))||(($minute>21)&&($minute<25))||(($minute>31)&&($minute<35))||(($minute>41)&&($minute<45))||(($minute>51)&&($minute<55))){
        $minmin = "минуты";
    }
    if(($minute == 0)||(($minute>4)&&($minute<21))||(($minute>24)&&($minute<31))||(($minute>34)&&($minute<41))||(($minute>44)&&($minute<51))||($minute>54)){
        $minmin = "минут";
    }
    if(($minute ==1)||($minute == 21)||($minute == 31)||($minute == 41)||($minute == 51)){
        $minmin = "минута";
    }
    if((($hour>1)&&($hour<5))||(($hour>21)&&($hour<25))){
        $hh = "часа";
    }
    if(($hour == 0)||(($hour>4)&&($hour<21))){
        $hh = "часов";
    }
    if(($minute ==1)||($minute == 21)){
        $hh = "час";
    }
?>
<p><?= "$hour $hh $minute $minmin"?></p>
</body>
</html>
