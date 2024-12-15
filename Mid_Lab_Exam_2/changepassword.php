<?php
session_start();

if (!isset($_SESSION['user'])) {
    $_SESSION['users'] = [];
}

if (isset($_POST['submit'])) {
    $_SESSION['users'][] = [
		"cupassword" => $_POST['cupassword'],
		"npassword" => $_POST['npassword'],	
		"rpassword" => $_POST['rpassword']
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
        <legend>CHANGE PASSWORD</legend>
        <form action="" method="POST">
            Current Password: <br>
            <input type="password" name="cupassword" required><br>
			New Password: <br>
            <input type="password" name="npassword" required><br>
			Retype New Password: <br>
            <input type="password" name="rpassword" required><br>
			<hr/>
            <button type="submit" name="submit">Change</button>
            <a href="uhome.php, adhome.php">Home</a>
        </form>
    </fieldset>
</body>
</html>