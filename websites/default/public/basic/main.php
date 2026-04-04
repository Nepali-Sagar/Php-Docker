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
    // generate random number from min to max value
    echo 'Generate random number <br>';
    $val1 = rand(1, 6);
    $val2 = rand(2, 4);

    echo 'You rolled a ' . $val1 . ' and a ' . $val2 . '<br>';

    echo '<br>';
    //////////////////////////////////////////////////
    // Comparing data type
    echo 'Comparing data types <br>';
    $str = '1234';
    $num = 1234;

    if ($num === $str) {
        echo 'str and num are same data types';
    } else {
        echo 'str and num are not same data types';
    }

    echo '<br>';
    echo '<br>';

    //////////////////////////////////////////////////
    // if-else statement

    echo 'Finding smallest number amoung three number <br>';

    $num1 = 11;
    $num2 = 32;
    $num3 = 43;


    if ($num1 < $num2 && $num1 < $num3) {
        echo 'Num 1 is smallest ' . $num1;
    } else if ($num2 < $num1 && $num2 < $num3) {
        echo 'Num 2 is smallest ' . $num2;
    } else {
        echo 'Num 3 is smallest ' . $num3;
    }

    echo '<br>';
    echo '<br>';
    //////////////////////////////////////////////////
    // Loop
    echo 'Simple for loop.';
    for ($i = 1; $i < 100; $i++){
        // echo '<br> Nami ';
        if ($i % 2 == 0){
            echo '<br>' .$i;
        }
    }

    echo '<br>';
    echo '<br>';
    //////////////////////////////////////////////////
    // While Loop
    echo 'Use of break and continue in While loop.';
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