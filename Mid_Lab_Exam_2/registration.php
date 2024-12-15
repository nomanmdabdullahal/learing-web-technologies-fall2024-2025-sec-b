<?php
session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['users'] = [];
}

if (isset($_POST['submit'])) {
    $_SESSION['users'][] = [
        "id" => $_POST['id'],
		"password" => $_POST['password'],
		"cpassword" => $_POST['cpassword'],	
        "name" => $_POST['name'],
        "use" => $_POST['use']
     
    ];

    header("Location: login.php");
    exit();
}
?>

<html>
<head>
    <title>Registration</title>
</head>
<body>
    <fieldset>
        <legend><b>REGISTRATION<b></legend>
        <form action="" method="POST">
            ID: <br>
            <input type="text" name="id" required><br><br>
            Password: <br>
            <input type="password" name="password" required><br><br>
			Confirm Password: <br>
            <input type="password" name="cpassword" required><br><br>
            Name: <br>
            <input type="text" name="name" required><br><br>
            User Type:
			<hr/>
            <input type="radio" name="use" value="user"> User
            <input type="radio" name="use" value="admin"> Admin
            <hr/>
            <button type="submit" name="submit">Sign Up</button>
            <a href="login.php"><input type="name">Sign In></a>
        </form>
    </fieldset>
</body>
</html>