<html>
<head>
    <title>DOB</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><b>Date Of Birth</b></legend>
            <table>
                <tr>
                    <td>dd <br>
                    <input type="text"  name="date" value="" /> / </td>
                    <td>mm <br>
                    <input type="text"  name="date" value="" /> / </td>
                    <td>yyyy <br>
                    <input type="text"  name="date" value="" /> </td>
                </tr>
            </table>
            <hr />
            <input type="submit" name="" value="Submit" />
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date = ($_POST['date']);
        if (empty($date)) {
            echo "Date of birth cannot be empty.";
        } 
        else {
            if (strtotime($date) === false) {
                echo "Please enter a valid date.";
            } 
            else {
                echo "$date";
            }
        }
    }
    ?>
</body>
</html>