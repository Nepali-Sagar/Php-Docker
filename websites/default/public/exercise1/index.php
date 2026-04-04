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

    $disc1 = rand(1, 6);
    $disc2 = rand(1, 6);

    // if ($disc1 == 6){
    //     echo 'You rolled a 6! You win!';
    // } else {
    //     echo "You rolled a $disc1! You lose!";
    // }


    // if ($disc1 == 6 && $disc2 == 6) {
    //     echo "You rolled a $disc1 and $disc2 ! You win!";
    // } else {
    //     echo "You rolled a $disc1 and $disc2 ! You loss!";
    // }


    if ($disc1 == 6 || $disc2 == 6) {
        echo "You rolled a $disc1 and $disc2 ! You win!";
    } else {
        echo "You rolled a $disc1 and $disc2 ! You loss!";
    }



    ?>

    <a href="./index.php">Referesh Page</a>

</body>

</html>