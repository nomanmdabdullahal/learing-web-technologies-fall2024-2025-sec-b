<html>
<head>
    <title>Name</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><b>Name</b></legend>
            <input type="text" name="name" >
            <hr />
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];

        if (empty($name)) {
            echo "Cannot be empty.";
        }
        else if (str_word_count(trim($name)) < 2) {
            echo "Contains at least two words .";
        }
        else if (!($name[0] >= 'A' && $name[0] <= 'Z') && !($name[0] >= 'a' && $name[0] <= 'z')) {
            echo "Must start with a letter.";
        }
        else {
            $isSet = true;
            for ($i = 0; $i < strlen($name); $i++) {
                $char = $name[$i];
                if (!(($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z') || $char == '.' || $char == '-' || $char == ' ')) {
                    $isSet = false;
                }
            }
            if (!$isSet) {
                echo "Name can only contain contain a-z, A-Z, period, dash only.";
            } 
            else {
                echo $name;
            }
        }
    }
    ?>
</body>
</html>