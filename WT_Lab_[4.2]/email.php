<html>
<head>
    <title>EMAIL</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend><b>Email</b></legend>
        <input name="email" type="text">
        <hr />
        <input type="submit" value="Submit">
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $email = $_POST["email"];
    
    if (empty($email)) {
        echo "Email cannot be empty.";
    }
    else if (strpos($email, "@") == false || strpos($email, ".") == false) {
        echo "Please enter a valid email address (e.g., anything@example.com).";
    }
    else {
        echo "$email";
    }
}
?>

</body>
</html>