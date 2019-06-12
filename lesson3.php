<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 3</title>
</head>
<body>
    <? //Задание 1
    $i=0;
    while($i<=100){
        if($i%3==0){
            echo "$i ";
        }
        $i++;
    }
    echo "<br/>";
    
    //Задание 2
    $i=0;
    $chet=" - четное число.";
    $nechet=" - нечетное число.";
    do {
        if($i==0){
            echo "$i - это ноль.<br/>";
        }
        if(($i%2==0) && ($i!=0)){
            echo "$i $chet<br/>";
        }
        if(($i%2!=0) && ($i!=0)) {
            echo "$i $nechet<br/>";
        }
        $i++;
    }
    while($i<=10);
    ?>
    
    <br>
    
    <? //Задание 3
    $obl=["Москвовская область"=>["Москва","Зеленоград","Клин"],
          "Ленинградская область"=>["Санкт-Петербург","Всеволожск","Павловск","Кронштадт"],
          "Рязанская область"=>["Рязань","Скопин","Рыбнов"]];
    foreach($obl as $key =>$value){
        echo "$key:<br/>";
        foreach($value as $town){
            echo "$town ";
        }
        echo "<br/>";
    }
    ?>
    
    <br>
    
    <? //Задание 4
    function translit($str){
         $zam =[ 'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '',    'ы' => 'y',    'ъ' => '',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
         
            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'Y',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
            'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
            'Ь' => '',    'Ы' => 'Y',   'Ъ' => '',
            'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya'];
        return strtr($str,$zam);
    }
    ?>
    <form action="lesson3.php" method="post">
    Введите строку  <input type="text" name="str2" placeholder = "Транслит"/><br />
    <input type="submit" name="submit" value="Отправить" />
    </form>
    <?
    $str = $_POST['str2'];
    $itog = translit($str);
    echo "$itog<br/>";
    ?>
    
    <br>
    
    <?//Задание 5
    function noSpace($mas){
        for($i=0;$i<count($mas);$i++){
            if ($mas[$i]==" "){
                $mas[$i]="_";
            }
        }
        $str = implode($mas);
        return $str;
    }
    ?>
    <form action="lesson3.php" method="post">
    Введите строку  <input type="text" name="str" placeholder = "Удаление пробелов"/><br />
    <input type="submit" name="submit" value="Отправить" />
    </form>
    <?
    $str = $_POST['str'];
    $mas = str_split($str);
    $itog = noSpace($mas);
    echo "$itog<br/>";
    ?>
    
    <br>
    
    <?//Задание 7
    for($i=0;$i<10;print_r($i),$i++){}
    ?>
    
    <br>
    <br>
    <? //Задание 8
    $k=0;
    foreach($obl as $key =>$value){
        echo "$key:<br/>";
        foreach($value as $town){
            $firstL = substr($town, 0, 2);
            if($firstL=='К'){
                echo "$town ";
                $k=1;
            }
        }
        if($k==0){
                echo "Нет городов, начинающихся с буквы К";
            }
        $k=0;
        echo "<br/>";
    }
    ?>
    
    <br>
    
    <? //Задание 9
    function translit2($str){
         $zam =[ 'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '',    'ы' => 'y',    'ъ' => '',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
         
            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'Y',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
            'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
            'Ь' => '',    'Ы' => 'Y',   'Ъ' => '',
            'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
            ' ' => '_'];
        return strtr($str,$zam);
    }
    ?>
    <form action="lesson3.php" method="post">
    Введите строку  <input type="text" name="str3" placeholder = "Транслит и без пробелов"/><br />
    <input type="submit" name="submit" value="Отправить" />
    </form>
    <?
    $str = $_POST['str3'];
    $itog = translit2($str);
    echo "$itog<br/>";
    ?>
</body>
</html>