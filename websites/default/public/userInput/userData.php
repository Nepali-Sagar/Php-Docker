<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIsplay Data</title>
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
    $userName = $_GET['name'];
    $userAge = $_GET['age'];

    echo $userName . ', ' . $userAge;



    ?>

</body>

</html>