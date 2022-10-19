<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Жуйкова 42В (Занятие 4)</title>
</head>
<body>
<h1>Просто</h1>
<?php
//Задача Просто
$peoples = array(
    'Вася'=>37,
    'Даша'=>56,
    'Алиса'=>93);
print_r($peoples);
?>

<h1>Поиск данных</h1>
<?php
//Задача Поиск данных
$people = array(
    'Вася'=>37,
    'Даша'=>56,
    'Алиса'=>93);
$name='Алиса';
if(isset($people[$name])){
    echo $people[$name];
} else {
    echo 'Данные не найдены';
}
?>

<h1>Глоссарий</h1>
<?php
//Задача Глоссарий
$glossary = array(
    'Сулугуни'=>' - это рассольный грузинский сыр из региона Самегрело.',
    'Страчателла'=>' - это сыр, производимый из молока итальянских буйволиц, с использованием технологий вытягивания и измельчения.',
    'Буррата'=>' - это итальянский сыр, изготавливаемый из сливок и молока буйволицы или коровы.'
);
$grade='Страчателла';
if(isset($glossary[$grade])){
    echo $grade.$glossary[$grade];
} else {
    echo 'Данные не найдены';
}
?>

<h1>Выше крыши</h1>
<?php
//Задача Выше крыши
$reputation = array(
    'Вася'=>37,
    'Дима'=>156,
    'Наташа'=>93,
    'Ева'=>102,
    'Алиса'=>20);
print_r($reputation);
echo '</br>';
foreach ($reputation as $i=>$value){
    if($reputation[$i]>100){
        $reputation[$i]=100;
    }
}
print_r($reputation);
?>

<h1>Данила Мастер</h1>
<?php
//Задача Данила Мастер
$reputation_user = array(
    'Вася'=>37,
    'Дима'=>100,
    'Наташа'=>93,
    'Ева'=>55,
    'Алиса'=>20);
print_r($reputation_user);
echo '</br>'.'</br>';
foreach($reputation_user as $key => $value){
    if($reputation_user[$key]<=30){
        echo $key.' - Новичок'.'</br>';
    } elseif ($reputation_user[$key]>30 && $reputation_user[$key]<=60){
        echo $key.' - Мастер'.'</br>';
    } elseif ($reputation_user[$key]>61){
        echo $key.' - Грандмастер'.'</br>';
    }
}

?>

<h1>Рейтинг +1</h1>
<?php
//Задача Рейтинг +1
$reputation_user2 = array(
    'Вася'=>37,
    'Дима'=>99,
    'Наташа'=>93,
    'Ева'=>55,
    'Алиса'=>20);
echo '<br>';
print_r($reputation_user2);
echo '<br>'.'<br>';
$new_user = 'Катя'; // Записали имя, которое надо найти
// Если записать в эту переменную "Наташа" и тд, то по итогу рейтинг этого пользователя будет увеличен на 1
$check = 0;
foreach ($reputation_user2 as $key=>$value){
    if($key == $new_user){
        $reputation_user2[$key] += 1;
        $check = 1;
    }
}
if(!$check){
    $reputation_user2[$new_user] = 0;
}
print_r($reputation_user2);
?>

<h1>Бан</h1>
<?php
//Задача Бан
$reputation_delete = array(
    'Вася'=>-4,
    'Дима'=>100,
    'Наташа'=>93,
    'Ева'=>-1,
    'Алиса'=>-5);
print_r($reputation_delete);
echo '</br>';
foreach ($reputation_delete as $i=>$value){
    if ($reputation_delete[$i]<0) {
        unset($reputation_delete[$i]);
    }
}
print_r($reputation_delete);
?>

<h1>Файл</h1>
<?php
//Задача Файл
$path = 'C:\\Windows\\dirname\\file.exe';
$path_fold = explode("\\", $path);
$file_name = $path_fold[count($path_fold)-1];
unset($path_fold[count($path_fold)-1]);
$dir_name = implode('\\', $path_fold);

echo "Имя файла: $file_name"."</br>";
echo "Папка: $dir_name".PHP_EOL;
?>

<h1>Царь горы</h1>
<?php
//Задача Царь горы
$reputation_king = array(
    'Вася'=>56,
    'Дима'=>100,
    'Наташа'=>93,
    'Ева'=>88,
    'Алиса'=>20);
print_r($reputation_king);
echo '<br>'.'<br>';
echo 'Пользователь с наибольшей репутацией: '.array_search(max($reputation_king), $reputation_king);
echo '<br>'.'<br>';
//Чтобы получить 3-х пользователей с наибольшей репутацией можно использовать
// сортировку (по убыванию) и далее с помощью array_slice выбрать срез массива и,
// используя key, обратиться к ключу, чтобы вывести имя пользователя.
arsort($reputation_king);
print_r($reputation_king);
echo '<br>'.'<br>';
echo 'Три пользователя с наибольшей репутацией: '.key(array_slice($reputation_king, 0)).', '.
    key(array_slice($reputation_king, 1)).', '.key(array_slice($reputation_king, 2));
?>

<h1>День недели</h1>
<?php
//Задача День недели
$week = 'В monday Наташа идёт в колледж изучать английский. Во tuesday у неё прогулка с лучшими подружками, а wednesday нужна для того, чтобы поехать к Дмитрию. Ну, thursday, friday и saturday нужны, чтобы агрессивно изучать PHP. Ну а в sunday нужно обязательно съездить на дачу.';
$en_day = ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'];
$ru_day=['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'];
echo $week.'</br>'.'</br>';
echo str_replace($en_day, $ru_day, $week);
?>

<h1>Лето</h1>
<?php
//Задача Лето
$summer = array(
    'Сентябрь'=>'Осень',
    'Октябрь'=>'Осень',
    'Ноябрь'=>'Осень',
    'Декабрь'=>'Зима',
    'Январь'=>'Зима',
    'Февраль'=>'Зима',
    'Март'=>'Весна',
    'Апрель'=>'Весна',
    'Май'=>'Весна',
    'Июнь'=>'Лето',
    'Июль'=>'Лето',
    'Август'=>'Лето'
);
$name_month = 'Август';
echo $name_month.' - '.$summer[$name_month];
?>

<h1>Корзина</h1>
<?php
//Задача Корзина
$cart =[
    1 => ['name'=>'Кеды', 'count'=>2, 'price'=>1800],
    2 => ['name'=>'Джинсы', 'count'=>1, 'price'=>2500],
    3 => ['name'=>'Рубашка', 'count'=>1, 'price'=>700],
    4 => ['name'=>'Жилет', 'count'=>1, 'price'=>1200],
    5 => ['name'=>'Носки', 'count'=>1, 'price'=>120]
];

$id_item = 2;
$item=$cart[$id_item];

echo 'Товар с ID = '.$id_item.' имеет стоимость: '.$item['price'].' рублей.';

?>
</body>
</html>