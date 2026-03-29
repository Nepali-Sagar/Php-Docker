<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            background-color: #232323;
            color: #fff;
        }
    </style>
</head>

<body>

    <?php

        $fruits = ["Apple", "Banana", "Orange"];

        for ($i = 0; $i < count($fruits); $i++){
            echo $fruits[$i]. '<br>';
        }


        $user = [
            'name' => 'Ram',
            'age' => 19,
            'hobby' => ['Coding', 'Reading']
        ];

        echo $user['hobby'][0];

        echo '<pre>';

        
    ?>

</body>

</html>