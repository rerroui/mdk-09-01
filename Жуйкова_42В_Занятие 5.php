<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Жуйкова 42В (Занятие 5)</title>
</head>
<body>
<h1>Слава КПСС</h1>
<?php
//Задача Слава КПСС
$text = 'Wer schön sein muss, der will auch leiden.';
$k = 5;
for($i=0; $i<$k; $i++){
    echo $text.'</br>';
}
?>

<h1>Абзац</h1>
<?php
//Задача Абзац
$n = 5;
for($i=1; $i<$n+1; $i++){
    echo htmlspecialchars("<p>Абзац ".$i."</p>").'</br>';
}
?>

<h1>Половина</h1>
<?php
//Задача Половина
$prize_amount = 1000;
$last_cost = 7;
$count_day = 0;
while($prize_amount > $last_cost){
    $prize_amount/=2;
    $count_day+=1;
}
echo "Через $count_day дней приз станет меньше $last_cost рублей.";
?>

<h1>Кто есть кто</h1>
<?php
//Задача Кто есть кто
$reputation_table = array(
    'Вася'=>45,
    'Дима'=>100,
    'Наташа'=>84,
    'Ева'=>56,
    'Алиса'=>17);
?>
<table style="border: 1px solid black; text-align: center; border-collapse: collapse">
    <thead>
    <tr style="border: 1px solid black">
        <th style="border-right: 1px solid black; padding: 0px 25px">Имя</th>
        <th style="padding: 5px 15px">Рейтинг</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        foreach ($reputation_table as $key => $value) {
            echo "<td style='border-bottom: 1px solid black'>$key</td>";
            echo "<td style='padding: 5px 15px; border-left: 1px solid black; border-bottom: 1px solid black'>$value</td>";
            echo "<tr></tr>";
        }
        ?>
    </tr>
    </tbody>
</table>

<h1>Весь рейтинг</h1>
<?php
//Задача Весь рейтинг
$reputation_sum = array(
    'Вася'=>37,
    'Дима'=>156,
    'Наташа'=>93,
    'Ева'=>102,
    'Алиса'=>20);
$sum = 0;
foreach ($reputation_sum as $key => $value){
    $sum = $sum+$value;
}
echo "Сумма всех рейтингов пользователей = $sum.";
?>

<h1>Средняя по больнице</h1>
<?php
//Задача Средняя по больнице
$reputation_hospital = array(
    'Вася'=>0,
    'Дима'=>156,
    'Наташа'=>93,
    'Ева'=>102,
    'Алиса'=>0);
$count_num = 0;
$all_sum = 0;
foreach ($reputation_hospital as $key => $value){
    if($value != 0){
        $count_num +=1;
        $all_sum+=$value;
    }
}
$average_value = $all_sum/$count_num;
echo "Средний рейтинг пользователей = $average_value.";
?>

<h1>Выше крыши 2</h1>
<?php
//Задача Выше крыши 2
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

<h1>Второе дно</h1>
<?php
//Задача Второе дно
$reputation_bottom = array(
    'Вася'=>-4,
    'Дима'=>100,
    'Наташа'=>93,
    'Ева'=>-1,
    'Алиса'=>-5);
print_r($reputation_bottom);
echo '</br>';
foreach ($reputation_bottom as $i=>$value){
    if ($reputation_bottom[$i]<0) {
        $reputation_bottom[$i]=0;
    }
}
print_r($reputation_bottom);
?>

<h1>Экватор</h1>
<?php
//Задача Экватор
$reputation_equator = array(
    'Вася'=>36,
    'Дима'=>100,
    'Наташа'=>93,
    'Ева'=>54,
    'Алиса'=>29);
print_r($reputation_equator);
echo '</br>';
foreach ($reputation_equator as $key=>$value){
    if ($value>50) {
        echo "</br> $key: $value </br>";
    }
}
?>

<h1>Данила Мастер 2</h1>
<?php
//Задача Данила Мастер 2
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

<h1>Выйди вон</h1>
<?php
//Задача Выйди вон
$array_one = array(
    'Вася',
    'Дима',
    'Наташа',
    'Ева',
    'Алиса',
    'Лена');
$array_two = array(
    'Ева',
    'Люба',
    'Вася',
    'Кирилл',
    'Андрей',
    'Даша'
);
print_r($array_one);
echo '</br>'.'</br>';
print_r($array_two);
echo '</br>'.'</br>';
echo 'Результат:'.'</br>'.'</br>';
$length_one_arr = count($array_two);
$array_one_two = array_merge($array_two,$array_one);
$unique = array_unique($array_one_two);
$slice = array_slice($unique, $length_one_arr);
print_r($slice);
?>

<h1>Шах</h1>
<table style="border: 1px solid black; border-collapse: collapse">
    <?php
    //Задача Шах
    for($i=1;$i<=8;$i++)
    {
        echo "<tr>";
        for($k=1;$k<=8;$k++)
        {
            $all=$i+$k;
            if($all%2==0)
            {
                echo "<td style='height: 30px; width: 30px; background-color: #FFFFFF'></td>";
            }
            else
            {
                echo "<td style='height: 30px; width: 30px; background-color: #000000'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>

<h1>Итог</h1>
<table style="border: 1px solid black; text-align: center; border-collapse: collapse">
    <thead>
    <tr style="border: 1px solid black">
        <th style="border-right: 1px solid black; padding: 0px 25px">Товар</th>
        <th style="border-right: 1px solid black; padding: 5px 15px">Количество</th>
        <th style="padding: 5px 15px">Цена</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        $cart =[
            1 => ['name'=>'Кеды', 'count'=>2, 'price'=>1800],
            2 => ['name'=>'Джинсы', 'count'=>4, 'price'=>2500],
            3 => ['name'=>'Рубашка', 'count'=>7, 'price'=>700],
            4 => ['name'=>'Жилет', 'count'=>12, 'price'=>1200],
            5 => ['name'=>'Носки', 'count'=>9, 'price'=>120]
        ];
        foreach ($cart as $sub){
            foreach ($sub as $key => $value){
                echo "<td style='border-right: 1px solid black; border-bottom: 1px solid black'>$value</td>";
            }
            echo "<tr></tr>";
        }
        ?>
    </tr>
    </tbody>
</table>

<h1>Зебра</h1>
<table style="border: 1px solid black; text-align: center; border-collapse: collapse">
    <tbody>
    <?php
    //Задача Зебра
    $row_count = 10;
    for($i=1; $i<=$row_count; $i++){
        if($i%2==0){
            echo "<tr style='background-color: #FFFFFF; border-bottom: 1px solid black'><td>$i</td></tr>";
        }else{
            echo "<tr style='background-color: #000000; border-bottom: 1px solid black; color: #FFFFFF'><td>$i</td></tr>";
        }
    }
    ?>
    </tbody>
</table>

<h1>Меню</h1>
<?php
//Задача Меню
$pages = ['О нас'=>'about.html', 'Главная'=>'main.html', 'Контакты'=>'contacts.html', 'Загрузки'=>'downloads.html'];
foreach ($pages as $key => $page){
    echo "<a href='$page'>$key</a>".'</br>';
}
?>

<h1>Меню 2</h1>
<?php
//Задача Меню 2
$pages = ['О нас'=>'about.html', 'Главная'=>'main.html', 'Контакты'=>'contacts.html', 'Загрузки'=>'downloads.html'];
$page_current = 'Главная';
foreach ($pages as $key => $page){
    if($key===$page_current){
        echo "<a href='$page' style='color: green'>$key</a>".'</br>';
    } else{
        echo "<a href='$page'>$key</a>".'</br>';
    }
}
?>
</body>
</html>