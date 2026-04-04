<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
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

    // 1
echo "1. Unorder list";
    for ($i = 1; $i <= 10; $i++) {
        echo ' 
        <ul>
            <li> ' . $i . '</li>
        </ul>';
    }

    // 3
    echo "3. Odd Number";
    for ($i = 21; $i <= 99; $i++){
        // echo '<br> Nami ';
        if ($i % 2 !== 0){
            echo '<br>' .$i;
        }
    }

    // 4
    echo '<br>4. Nine table <br>';
        for ($i = 1; $i <= 12; $i++) {
        echo $i . ' * 9' . ' = ' . 9 * $i. '<br>';
    }

    echo '<br>';

    // 5
    echo '5. <br>';
            for ($i = 1; $i <= 100; $i++) {
        echo $i . ' * 9' . ' = ' . 9 * $i. '<br>';
    }

      echo '<br>';

    

    ?>
</body>

</html>