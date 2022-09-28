<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Четное (без ветвления, 0 - нечетное, 1 - четное)</h1>
    <?php
    function number($n)
    {
        return ($n + 1) % 2;
    }

    echo number(5);
    ?>

    <h1>Ход ладьи (без ветвления)</h1>
    <?php
    function rook($x1, $y1, $x2, $y2)
    {
        echo var_export(($x1 === $x2 || $y1 === $y2));
    }

    rook(2, 2, 5, 7);

    ?>

    <h1>Ход короля (без ветвления)</h1>
    <?php
    function king($x1, $y1, $x2, $y2)
    {
        echo var_export((abs($x1 - $x2) <= 1) && (abs($y1 - $y2) <= 1));
    }

    king(1, 5, 1, 6);

    ?>

    <h1>Гость</h1>
    <?php
    function visitor($guest)
    {
        if ($guest === true) {
            echo "Пожалуйста авторизуйтесь!";
        }
    }
    visitor(true);
    ?>

    <h1>Модуль</h1>
    <?php
    function module($num)
    {
        if ($num < 0) {
            $num_module = -1 * ($num);
            echo "Модуль числа равен " . $num_module;
        } else {
            echo "Модуль числа равен " . $num;
        }
    }
    module(0);
    ?>

    <h1>Кто больше (максимум из двух чисел)</h1>
    <?php
    function more($num1, $num2)
    {
        if ($num1 > $num2) {
            echo "Большее число = " . $num1;
        } else {
            echo "Большее число = " . $num2;
        }
    }
    more(4, 4);
    ?>

    <h1>Черное и белое</h1>
    <?php
    function black_white($x, $y)
    {
        if (($x + $y) % 2 === 1) {
            echo "Цвет ячейки белый.";
        } else {
            echo "Цвет ячейки черный.";
        }
    }
    black_white(1, 5);
    ?>

    <h1>Все четные</h1>
    <?php
    function all_even($a, $b, $c)
    {
        if ($a % 2 == 0 && $b % 2 == 0 && $c % 2 == 0) {
            echo "Все введенные числа являются четными.";
        } else {
            echo 'Не все введенные числа четные.';
        }
    }

    all_even(4, 6, 8);
    ?>


    <h1>Есть ли четные</h1>
    <?php
    function one_even($a, $b, $c)
    {
        if ($a % 2 == 0 || $b % 2 == 0 || $c % 2 == 0) {
            echo "Среди введенных чисел есть четное(ые).";
        } else {
            echo 'Все числа - нечетные.';
        }
    }

    one_even(4, 6, 5);
    ?>

    <h1>Выходной</h1>
    <?php
    function weekend($a)
    {
        if ($a >= 5) {
            echo "Выходной! ;)";
        } else {
            echo 'Не выходной :(';
        }
    }

    weekend(5);
    ?>

    <h1>Треугольник</h1>
    <?php
    function triangle($a, $b, $c)
    {
        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            echo "Из введенных отрезков можно составить треугольник!";
        } else {
            echo "Из введенных отрезков нельзя составить треугольник!";
        }
    }

    triangle(3, 4, 5);
    ?>

    <h1>Високосный год</h1>
    <?php
    function leap_year($year)
    {
        if ($year % 4 === 0 && $year % 100 !== 0 || $year % 400 === 0) {
            echo "YES";
        } else {
            echo "NO";
        }
    }

    leap_year(2024);
    ?>

    <h1>Знак</h1>
    <?php
    function sign($number)
    {
        if ($number > 0) {
            echo 1;
        } else if ($number < 0) {
            echo -1;
        } else {
            echo 0;
        }
    }

    sign(-10);
    ?>

    <h1>Длинная соломинка</h1>
    <?php
    function straw($a, $b, $c)
    {
        if ($a > $b && $a > $c) {
            echo 'Максимальный отрезок ' . $a;
        } else if ($b > $a && $b > $c) {
            echo 'Максимальный отрезок ' . $b;
        } else {
            echo 'Максимальный отрезок ' . $c;
        }
    }

    straw(15, 10, 25);
    ?>

    <h1>Сегодня холодно</h1>
    <?php
    function today_cold($t)
    {
        if ($t < -30) {
            echo 'Оставайтесь дома!';
        } else if ($t < -10) {
            echo 'Сегодня холодно!';
        } else if ($t < 5) {
            echo 'Не холодно!';
        } else if ($t < 15) {
            echo 'Тепло!';
        } else if ($t < 25) {
            echo 'Очень тепло!';
        } else if ($t < 35) {
            echo 'Жарко!';
        } else if ($t >= 35) {
            echo 'Пекло!';
        }
    }

    today_cold(15);
    ?>

    <h1>Ежедневник</h1>
    <?php
    function planner($h_start_1, $m_start_1, $s_start_1, $h_finish_1, $m_finish_1, $s_finish_1, $h_start_2, $m_start_2, $s_start_2, $h_finish_2, $m_finish_2, $s_finish_2)
    {
       $start1 = ($h_start_1 * 3600) + ($m_start_1 * 60) + ($s_start_1);
       $start2 = ($h_start_2 * 3600) + ($m_start_2 * 60) + ($s_start_2);
       $finish1 = ($h_finish_1 * 3600) + ($m_finish_1 * 60) + ($s_finish_1);
       $finish2 = ($h_finish_2 * 3600) + ($m_finish_2 * 60) + ($s_finish_2);

       if ($start1 < $start2 && $finish1 > $start2){
            echo var_export(true). ", события пересекаются";
       } else if($start2 < $start1 && $finish2 > $start1){
            echo var_export(true). ", события пересекаются";
       } else if($start2 === $start1){
            echo var_export(true). ", события пересекаются";
       } else{
            echo var_export(false). ", события не пересекаются";
       }
    }

    planner(14,30,15,14,40,15,14,40,40,14,50,30);
    ?>



    <h1>Шоколадка</h1>
    <p>Шоколадка имеет вид прямоугольника, разделенного на n × m долек. Шоколадку можно один раз разломить по прямой на две части. Определите, можно ли таким образом отломить от шоколадки часть, состоящую ровно из k долек.</p>
    <?php
    function chocolates($m, $n, $k)
    {
        if ($n * $m < $k) {
            echo "Вы ввели большее количество долек, чем есть в шоколадке";
        } else if ($n * $m === $k) {
            echo "Вы используете целую шоколадку";
        } else if ($k % $m === 0 || $k % $n === 0) { //проверяем кратность
            echo "Можно";
        } else {
            echo "Нельзя";
        }
    }
    echo chocolates(6, 9, 18);
    ?>

    <h1>Выходной 2 (День заказа учитывается)</h1>
    <?php
    function weekend_two($k, $n)
    {
        $k += $n;
        $k = $k % 7; //убираем полные недели
        if ($k === 5 || $k === 6) {
            $k = 0;
        }
        return 'Номер для доставки: ' . $k;
    }
    echo weekend_two(6, 9);
    ?>

    <h1>Который час?</h1>
    <p>По заданному количеству часов определить окончание записи: 1 час, 12 часов, 122 часа и т.д.</p>
    <?php
    function how_hour($hour)
    {
        $last_number = $hour % 10;
        if ($last_number === 1) {
            return ($hour . ' час');
        } elseif ($last_number > 1 && $last_number < 5) {
            return ($hour . ' часa');
        } else {
            return ($hour . ' часов');
        }
    }
    echo how_hour(0) . PHP_EOL;
    echo how_hour(542) . PHP_EOL;
    echo how_hour(1) . PHP_EOL;
    ?>

</body>

</html>