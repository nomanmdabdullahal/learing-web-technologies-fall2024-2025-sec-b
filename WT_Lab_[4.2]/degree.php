<html>
<head>
<title>DEGREE</title>
</head>
<body>
    <form method="post">
    <fieldset>
            <legend><b>Degree</b></legend>
            <input name="degree[]" type="checkbox" value="SSC"> SSC
            <input name="degree[]" type="checkbox" value="HSC"> HSC
            <input name="degree[]" type="checkbox" value="BSc"> BSc
            <input name="degree[]" type="checkbox" value="MSc"> MSc
            <hr />
            <input type="submit" value="Submit">
    </fieldset>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //$degree = ($_POST['degree']);
        if (empty(($_POST['degree'])) || count(($_POST['degree'])) < 2) {
            echo "At least two options must be selected.";
        } 
        else {
            echo implode(", ", ($_POST['degree']));
        }
    }
    ?>
</body>

</html>
