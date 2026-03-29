<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #161616;
            color: #fff;
            font-size: 1.5em;
        }
    </style>
</head>

<body>
    <?php

    // $num = rand(1, 6);
    // $num2 = rand(2, 4);

    // echo 'You rolled a ' . $num . ' and a ' . $num2 . '<br>';

    // // Comparing type

    // $str = '1234';
    // $num = 1234;



    // if ($num === $str){
    //     echo 'str and num are equal';
    // } else {
    //     echo 'str and num are not equal';
    // }

    //////////////////////////////////////////////////

    // if-else statement

    $num1 = 11;
    $num2 = 32;
    $num3 = 43;


    if ($num1 < $num2 && $num1 < $num3) {
        echo 'Num 1 is smallest.';
    } else if ($num2 < $num1 && $num2 < $num3) {
        echo 'Num 2 is smallest.';
    } else {
        echo 'Num 3 is smallest.';
    }


    //////////////////////////////////////////////////
    echo '<br>';

    // Loop

    // for ($i = 1; $i < 100; $i++){
    //     // echo '<br> Nami ';
    //     if ($i % 2 == 0){
    //         echo '<br>' .$i;
    //     }
    // }

    // While Loop

    $x = 100;

    while ($x > 0) {

        echo '<br>' . $x;
        $x--;

        if ($x === 50) {
            continue;
        }
    }

    ?>

</body>

</html>