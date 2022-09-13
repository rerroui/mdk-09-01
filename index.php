<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
//Задача 1

//function radius($x, $y, $R){
//    if(sqrt($x**2 + $y**2) <= $R){
//        return 'Точка принадлежит кругу';
//    }
//    else{
//        return 'Точка не принадлежит кругу';
//    }
//};
//echo radius(1, -1, 3);

//Задача 2

//function thousand($user_count){
//    if($user_count%1000==0){
//        return 'Вы счастливый обладатель скидки XD';
//    }
//    else{
//        return 'Вы будете без скидки :(';
//    }
//};
//echo thousand(23000);

//Задача 3

//function zero($number){
//    if($number === 0){
//        return 'Число равно нулю';
//    }
//    elseif ($number > 0){
//        return 'Число положительное';
//    }
//    elseif ($number < 0){
//        return 'Число отрицательное';
//    }
//};
//echo zero(-124);

//Задача 4 (Четное)

//function zero_one($number){
//    if($number%2==0){
//        return '1';
//    }
//    else{
//        return '0';
//    }
//}
//echo zero_one(12);

    //Задача 5

//    function how_hour($hour){
//        $last_number = $hour%10;
//        if($last_number === 1){
//            return ($hour.' час');
//        }
//        elseif ($last_number>1 && $last_number<5){
//            return ($hour.' часa');
//        }
//        else{
//            return ($hour.' часов');
//        }
//    }
//    echo how_hour(4);
//
//    ?>

    <h1>Артикул</h1>

    <?php

    //Задача Артикул

    $number_art = 3454;
    printf('%06d', $number_art)

    ?>

    <h1>Время в формате hh:mm:ss</h1>

    <?php

    //Задача Часы

    $second = 20490;
    $hours = floor($second / 3600);
    $minutes = floor(($second / 60) % 60);
    $seconds = $second % 60;
    printf('%02d:%02d:%02d', $hours, $minutes, $seconds)
?>

    <h1>ФИО</h1>

    <?php

    //Задача ФИО

    $first_name = 'Наталья ';
    $second_name = 'Жуйкова ';
    $patronymic = 'Евгеньевна ';
    $FIO = $second_name.$first_name.$patronymic;
    echo $FIO, mb_substr($second_name, 0, 1),mb_substr($first_name, 0, 1),mb_substr($patronymic, 0, 1);

    ?>

    <h1>Короткий пароль</h1>

    <?php

    //Задача Короткий пароль

   $password = 1234567;
   if(mb_strlen(($password)) < 8){
       echo 'Слишком короткий пароль!';
   }
   else{
       echo 'Хороший пароль ;)';
   }

    ?>

    <h1>Пробел</h1>

    <?php

    //Задача Пробел

    $password_2 = 'gh b1234';
    if(mb_substr_count($password_2, ' ')>0){
        echo 'Внимание! Пароль не должен содержать пробелов!';
    }
    else{
        echo 'Хороший пароль! ;)';
    }

    ?>

    <h1>Ровно</h1>

    <?php

    //Задача Ровно

    $str_one = 'Привет';
    $str_two = 'Привет';
    if(mb_strlen($str_one) === mb_strlen($str_two)){
        echo 'Количество букв совпадает!';
    }
    else{
        echo 'Количество букв НЕ совпадает!';
    }

    ?>

    <h1>Подробнее</h1>

    <?php

    //Задача Подробнее

    $text = 'К северо-востоку от Москвы неподалеку от Воря-Богородского лесничества расположено озеро Черное. Окруженное тенью и прохладой хвойных деревьев.';
    if(mb_strlen($text) > 100){
        echo mb_substr($text, 0, 50)." <a href='#'>Подробнее</a>";
    }
    else{
        echo $text;
    }
    ?>

    <h1>Короче</h1>

    <?php

    //Задача Короче

    $word = 'Обороноспособность';
    if(mb_strlen($word) > 7){
        echo mb_substr($word, 0, 4).'-'.mb_substr($word, -2, 2);
    }
    else{
        echo $word;
    }

    ?>

    <h1>Коровы</h1>

    <?php

    //Задача Коровы

    $str = 'самостоятельность';
    $sign = 'с';
    echo "В строке '$str' символ '$sign' встречается ".mb_substr_count($str, $sign)." раза.";

    ?>

    <h1>Caps Lock</h1>

    <?php

    //Задача Caps Lock

    $password_qwerty = 'QWERTY123';


    ?>

    <h1>Регистронезависимые коровы</h1>

    <?php

    //Задача Регистронезависимые коровы

    $str_2 = 'САМОСТОЯТЕЛЬНОСТЬ';
    $sign_2 = 'с';
    echo "В строке '$str_2' символ '$sign_2' встречается ".mb_substr_count(mb_convert_case($str_2, MB_CASE_UPPER), mb_convert_case($sign_2, MB_CASE_UPPER))." раза.";

    ?>


</body>
</html>
