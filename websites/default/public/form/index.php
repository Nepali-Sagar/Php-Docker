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
            <div class="genderBox">
                <label for="myGenderMale">Male</label>
                <input type="radio" name="myGender" id="myGenderMale" value="Male">

                <label for="myGenderFemale">Female</label>
                <input type="radio" name="myGender" id="myGenderFemale" value="Female">
            </div>

            <select name="myNation" id="">
                <option value="Nation">Nation</option>
                <option value="nepal">Nepal</option>
                <option value="india">India</option>
                <option value="china">China</option>
            </select>

            <div class="termConditions">
                <input type="checkbox" name="termAccept" id="">
                <label for="termAccept">Accept Terms and Conditions.</label>
            </div>


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
                !empty($_GET["myGmail"]) &&
                !empty($_GET["myGender"]) &&
                !empty($_GET["myNation"]) &&
                !empty($_GET["termAccept"])
            ) {
                echo "<p> Name: " . $_GET["myName"] . "<p>";
                echo "<p> Age: " . $_GET["myAge"] . "<p>";
                echo "<p> Address: " . $_GET["myAddress"] . "<p>";
                echo "<p> Conatct: " . $_GET["myContact"] . "<p>";
                echo "<p> Email: " . $_GET["myGmail"] . "<p>";
                echo "<p> Gender: " . $_GET["myGender"] . "<p>";
                echo "<p> Nation: " . $_GET["myNation"] . "<p>";
                echo "<p> Terms and Conditions: " . $_GET["termAccept"] . "<p>";
            } else {
                echo "<p> Form submitted but fields are empty. </p>";
            }
        }
        ?>

    </div>

</body>

</html>