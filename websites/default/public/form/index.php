<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>

<body>

    <form action="index.php" method="GET">
        <fieldset>

            <legend>Contact Information</legend>
            <input type="text" name="myName" placeholder="name">
            <input type="number" name="myAge" placeholder="age">
            <input type="text" name="myAddress" placeholder="address">
            <input type="number" name="myContact" placeholder="9765123456">
            <input type="email" name="myGmail" placeholder="abc@gmail.com">

            <input type="submit" value="Submit" name="submitBtn">

        </fieldset>
    </form>


    <div class="details">
        <?php
        if (isset($_GET['submitBtn'])) {

            if (
                !empty($_GET["myName"]) &&
                !empty($_GET["myAge"]) &&
                !empty($_GET["myAddress"]) &&
                !empty($_GET["myContact"]) &&
                !empty($_GET["myGmail"])
            ) {
                echo "<p> Name: " . $_GET["myName"] . "<p>";
                echo "<p> Age: " . $_GET["myAge"] . "<p>";
                echo "<p> Address: " . $_GET["myAddress"] . "<p>";
                echo "<p> Conatct: " . $_GET["myContact"] . "<p>";
                echo "<p> Email: " . $_GET["myGmail"] . "<p>";
            } else {
                echo "<p> Form submitted but fields are empty. </p>";
            }
        }
        ?>

    </div>

</body>

</html>