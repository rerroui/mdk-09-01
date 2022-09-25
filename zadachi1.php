<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Квадраты</h1>
    <?php
    function squares($n, $m, $k)
    {
        return floor((($n * $m) / ($k ** 2)));
    }

    echo squares(5, 11, 5);
    ?>

    <h1>Четное (без ветвления, 0 - нечетное, 1 - четное)</h1>
    <?php
    function number($n)
    {
        return ($n + 1) % 2;
    }

    echo number(5);
    ?>

    <h1>Выходной 2 (День заказа учитывается)</h1>
    <?php
    function weekend($k, $n)
    {
        $k += $n;
        $k = $k % 7; //убираем полные недели
        if ($k === 5 || $k === 6) {
            $k = 0;
        }
        return $k;
    }
    echo weekend(6, 9);
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
    echo how_hour(0).PHP_EOL;
    echo how_hour(542).PHP_EOL;
    echo how_hour(1).PHP_EOL;
    ?>
</body>

</html>