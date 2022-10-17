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

<h1>День недели</h1>
<?php
//Задача День недели
$week = 'В monday Наташа идёт в колледж изучать английский. Во tuesday у неё прогулка с лучшими подружками, а wednesday нужна для того, чтобы поехать к Дмитрию. Ну, thursday, friday и saturday нужны, чтобы агрессивно изучать PHP. Ну а в sunday нужно обязательно съездить на дачу.';
$en_day = ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'];
$ru_day=['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'];
echo $week.'</br>'.'</br>';
echo str_replace($en_day, $ru_day, $week);
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

</body>
</html>