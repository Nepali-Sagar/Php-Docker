<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
        }

        body {
            background-color: #161616;
            color: #fff;
            font-size: 1.5em;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            border: 1px solid white;
            width: 25vw;
        }

        form input {
            padding: 10px;
            font-size: 1.1em;
        }
    </style>
</head>

<body>

    <form action="index.php" method="GET">

        <input type="text" name="myName" placeholder="name">
        <input type="number" name="myAge" placeholder="age">
        <input type="text" name="myAddress" placeholder="address">
        <input type="number" name="myContact" placeholder="9765123456">
        <input type="email" name="myGmail" placeholder="abc@gmail.com">

        <input type="submit" value="Submit">


    </form>


    <?php


    if (isset($_GET["myName"]) || isset($_GET["myAge"]) || isset($_GET["myAddress"]) || isset($_GET["myContact"]) || isset($_GET["myGmail"])) {
        echo "Your Name: " . $_GET["myName"] . "<br>";
        echo "Your Age: " . $_GET["myAge"] . "<br>";
        echo "Your Address: " . $_GET["myAddress"] . "<br>";
        echo "Your Conatct: " . $_GET["myContact"] . "<br>";
        echo "Your Email: " . $_GET["myGmail"] . "<br>";
    }

    ?>
</body>

</html>