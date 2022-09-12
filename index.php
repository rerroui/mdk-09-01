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

    function how_hour($hour){
        $last_number = $hour%10;
        if($last_number === 1){
            return ($hour.' час');
        }
        elseif ($last_number>1 && $last_number<5){
            return ($hour.' часa');
        }
        else{
            return ($hour.' часов');
        }
    }
    echo how_hour(4);

    ?>

    <?php

//Задача Ежедневник

// function diary($h_start_1, $m_start_1, $s_start_1, $h_finish_1, $m_finish_1, $s_finish_1, $h_start_2, $m_start_2, $s_start_2, $h_finish_2, $m_finish_2, $s_finish_2){
//    $number_one = $h_start_1.$m_start_1.$s_start_1;
//    $number_two = $h_finish_1.$m_finish_1.$s_finish_1;
//    $number_three =  $h_start_2.$m_start_2.$s_start_2;
//    $number_four = $h_finish_2.$m_finish_2.$s_finish_2;

//    if($number_one>$number_three){
//        if($number_two>$number_four){
//
//        }
//    }
    // }
// echo diary(14,10,30,15,00,20,14,50,13,15,40,10);
?>

</body>
</html>
