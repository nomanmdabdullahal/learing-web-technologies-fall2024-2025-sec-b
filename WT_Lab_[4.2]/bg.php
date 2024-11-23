<html>
    <head>
        <title>BLOOD GROUP</title>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend><b>Blood Group</b></legend>
                <select name="bg">
                    <option value=""> </option>
                    <option value="A+"> A+</option>
		            <option value="A-"> A-</option>
                    <option value="B+"> B+</option>
		            <option value="B-"> B-</option> 
                    <option value="O+"> O+</option>
		            <option value="O-"> O-</option>
                    <option value="AB+"> AB+</option>
                    <option value="AB-"> AB-</option>
                </select>
                <hr />

            <input type="submit" name="" value="Submit" />
        
</fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bG = $_POST["bg"];

    if ($bG == "") {
        echo "Must be selected.";
    }
     else {
        
        echo "Your blood group: " .$bG;
    }
}
?>
    </body>
</html>