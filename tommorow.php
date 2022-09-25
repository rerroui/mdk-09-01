<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи</title>
</head>

<body>

    <h1>Задача 1</h1>
    <p>Вывести все нечетные числа из диапазона от 100 до 50 и в конце посчитать их количество в виде: "Всего ... нечетных чисел". Проверка на нечётность должна быть оформлена функцией.</p>

    <?php

    function odd($number)
    {
        if ($number % 2 !== 0) {
            return true;
        } else {
            return false;
        }
    }

    $sum = 0;

    for ($i = 100; $i > 50; $i--) {

        if (odd($i)) {
            echo $i . PHP_EOL;
            $sum++;
        }
    }

    echo "Всего " . $sum . " нечетных чисел.";

    ?>

    <h1>Задача 2</h1>
    <p>Вычислить выражение переменной X в формуле:</p>

    <?php

    function calculation(){
        $x = (15 + (37 * 11)) / (95+(21/2));
        return $x;
    }

    echo "X = ".calculation();


    ?>

</body>

</html>