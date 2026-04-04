<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        body {
            background-color: #161616;
            color: #fff;
            font-size: 1.5em;
        }
    </style>
</head>

<body>

    <h1>Array</h1>

    <?php

    $fruits = ['apple', 'banana', 'orange'];

    for ($i = 0; $i < count($fruits); $i++) {
        echo '<p>' . $fruits[$i] . '</p>';
    }



    ?>

</body>

</html>