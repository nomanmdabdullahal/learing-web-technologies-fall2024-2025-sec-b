<html>
    <head>
        
    </head>
    <body>
    <form method="post">
    <fieldset>
        <legend><b>Login</b></legend>
        <td> Email/Username </td>
        <input name="email" type="text">
        <hr />
        <td> Password </td>
        <input name="password" type ="password">
        <hr/>
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
        echo "Please enter a valid username or password must (including @,.)!";
    }
    else {
        echo "Username";
    }
    }

    echo "<br>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    $password = $_POST["password"];
    
    if (empty($password)) {
        echo "Password cannot be empty.";
    }
    else if (strpos($password, "@") == false || strpos($password, ".") == false) {
        echo "Please enter a valid username or password must (including @,.)!";
    }
    else {
        echo "Successfully Login!";
        header("Location: Home.php");
        exit();
    }
    }
    
?>

</body>
</html>