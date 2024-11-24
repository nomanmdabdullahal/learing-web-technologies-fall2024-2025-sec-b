<html>
    <head>
    <title>Registration From</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><b>Registration Form</b></legend>
            <table cellspacing="0" width="40%">
                <tr>
                    <td colspan="3">
                </td>
                </tr>

                <tr>
                    <td width="20%">Name </td>
                    <td width="40%"><input type="text" name="name" value="" /></td>
                    <td width="10%"></td>
                </tr>

                <tr>
                    <td width="20%">Email </td>
                    <td width="40%"><input type="text" name="email" value="" /></td>
                    <td width="10%"></td>  
                </tr>

                <tr>
                    <td width="20%">Gender </td>
                    <td width="40%">
                        <input type="radio" name="gender" value="" /> Male
                        <input type="radio" name="gender" value="" /> Female
                        <input type="radio" name="gender" value="" /> Other  </td>
                    <td width="10%"></td>  
                </tr>

                <tr>
                    <td width="20%">Date Of Birth </td>
                    <td width="40%">
                        <input type="text"  name="" value="" /> / dd
                        <input type="text"  name="" value="" /> / mm                       
                        <input type="text"  name="" value="" /> /yyyy </td>
                    <td width="10%"></td>  
                </tr>

                <tr>
                    <td width="20%">Blood Group </td>
                    <td width="40%">
                    <select name="bg">
                    <option value =""> </option>
                    <option value="A+"> A+</option>
		            <option value="A-"> A-</option>
                    <option value="B+"> B+</option>
		            <option value="B-"> B-</option> 
                    <option value="O+"> O+</option>
		            <option value="O-"> O-</option>
                    <option value="AB+"> AB+</option>
                    <option value="AB-"> AB-</option>
                    </select>
                </td>
                    <td width="10%">
                    </td>  
                </tr>

                <tr>
                    <td width="20%">Degree </td>
                    <td width="40%"><input type="checkbox" name="" value="" /> SSC
                        <input type="checkbox" name="degree[]" value="" /> HSC
                        <input type="checkbox" name="degree[]" value="" /> BSc
                        <input type="checkbox" name="degree[]" value="" /> MSc
                    </td>
                    <td width="10%"></td>
                </tr>

                <tr>
                    <td width="20%">Photo </td>
                    <td colspan="2" width="40%">
                    <input type="file" name="" value="" />
                </td>
                </tr>

                <tr>
                    <td colspan="3" height="40"></td>
                </tr>

                <tr>
                    <td colspan="3"> 
                    <input type="submit" name="" value="Submit" />
                    <input type="reset" name="" value="Reset" />
                    </td>
                </tr>

            </table>
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
    echo "<br>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        if (empty(($_POST['degree'])) || count(($_POST['degree'])) < 2) {
        echo "At least two options must be selected.";
    } 
    else {
        echo implode(", ", ($_POST['degree']));
    }
}
    echo "<br>";
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



</head>
</html>


