<?php
session_start();

$error_message = "";

if (isset($_POST['submit'])) {
    $id= $_POST['id'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($_SESSION['users']) && !empty($_SESSION['users'])) {
        $found = false;

        foreach ($_SESSION['users'] as $user) {
            if ($user['id'] === $id && $user['password'] === $password) {
                $_SESSION['name'] = $user['name'];
                header("Location: uhome.php"); 
                exit();
            }
        }

        $error_message = "Invalid ID or password!";
    } else {
        $error_message = "Not found!";
    }
}
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <fieldset>
    <legend><b>LOGIN<b></legend>
    <form action="" method="POST">
        User ID: <br>
        <input type="text" name="id" required><br>
        Password:
        <input type="password" name="password" required><br>
        <hr/>
        <button type="submit" name="submit">Login</button>
        <a href="registration.php"><input type="text">Register</button></a>
    </form>
    </fieldset>

    <?php 
    if ($error_message):
        echo $error_message;
        endif; 
     ?>
</body>
</html>
