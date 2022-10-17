<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Жуйкова 42В (Занятие 3)</title>
</head>
<body>
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
printf('%02d:%02d:%02d', $hours, $minutes, $seconds);
echo '</br>'.'Если не обращать внимания на ошибку выше, то ответ выводится правильный. Не знаю как исправить эту error (до этого её не было) :(('
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
function Password($str_pass){
    $password_qwerty = 'QWERTY123';
    if($str_pass==='qwerty123'){
        echo 'Добро пожаловать!';
    }
    elseif (mb_substr_count($str_pass, $password_qwerty)===1){
        echo 'Возможно нажата клавиша Caps Lock!';
    }
    else{
        echo 'Ошибка';
    }
}
Password('QWERTY123');
?>

<h1>Регистронезависимые коровы</h1>

<?php

//Задача Регистронезависимые коровы

$str_2 = 'САМОСТОЯТЕЛЬНОСТЬ';
$sign_2 = 'с';
echo "В строке '$str_2' символ '$sign_2' встречается ".mb_substr_count(mb_convert_case($str_2, MB_CASE_UPPER), mb_convert_case($sign_2, MB_CASE_UPPER))." раза.";

?>

<h1>Курсив</h1>
<?php
function italic($text, $word_italic){
    echo $text."<br>";
    $word_italic=mb_convert_case($word_italic, MB_CASE_UPPER);
    $text=str_replace($word_italic, "<i>$word_italic</i>", $text);
    $word_italic=mb_convert_case($word_italic, MB_CASE_TITLE);
    $text=str_replace($word_italic, "<i>$word_italic</i>", $text);
    $word_italic=mb_convert_case($word_italic, MB_CASE_LOWER);
    $text=str_replace($word_italic, "<i>$word_italic</i>", $text);

    echo $text;
}
italic('Этого кота зовут Персик, этого КОТА зовут Барсик, а этого Кота зовут Валера.', 'кота');
?>

<h1>Тег</h1>

<?php

//Тег

function tag($str_lorem){
    $index_1=mb_stripos($str_lorem,'>');
    $index_2=mb_stripos($str_lorem,'<',-1);
    $length=mb_strlen($str_lorem)-$index_2+$index_1;
    echo mb_substr($str_lorem,$index_1+1,$length);
}
tag("<p>Lorem ipsum dolor.</p>");
?>

</body>
</html>
