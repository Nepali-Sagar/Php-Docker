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

    // Inbuild Function

    echo str_replace('NAME', 'Bob', 'Hello NAME <br>');
    echo date('d/m/y');
    echo '<br>';
    echo date('H:1');
    echo '<br>';

    // Other Inbuild function

    echo strtoupper('Hello World <br>');
    echo strtolower('Hello World <br>');
    echo strpos("Hello World", 'o');
    echo '<br>';
    echo strlen('Hello World!');
    echo '<br>';

    // Custom Function

    function evenNumber()
    {

        $number = 3;

        if ($number % 2 == 0) {
            echo $number . ' is even number.';
        } else {
            echo $number . ' is not even number.';
        }
    }

    evenNumber();

    echo '<br>';

    function addNumber($num1, $num2)
    {
        $sum = $num1 + $num2;
        return $sum;
    }

    $result1 = addNumber(40, 2);
    echo "Your result is $result1 <br>";

     $result2 = addNumber(20, 4);
    echo "Your result is $result2";

    ?>

</body>

</html>