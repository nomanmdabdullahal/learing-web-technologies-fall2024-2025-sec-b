<html>
<head>
    <title>GENDER</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><b>Gender</b></legend>
                <input name="gender" type="radio" value="Male"> Male
                <input name="gender" type="radio" value="Female"> Female
                <input name="gender" type="radio" value="Other"> Other
            <hr />
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
        if (empty($_POST['gender'])) {
            echo "At least one of them must be selected.";
        } else {
            echo $_POST['gender'];
        }
    }
    ?>
</body>
</html>