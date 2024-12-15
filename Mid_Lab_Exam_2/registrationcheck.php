<?php
session_start();

$fields = ['id','password', 'cpassword' 'name', 'use'];
$isEmpty = true;

foreach ($fields as $field) {
    if (isset($_SESSION[$field]) && !empty($_SESSION[$field])) {
        $isEmpty = false;
    }
}

if ($isEmpty) {
    header("Location: registration.php");
    exit();
}

if (isset($_POST['log'])) {
    header("Location: login.php");
    exit();
}
?>

<html>
<head>
    <title></title>
</head>
<body>
    <form action="" method="POST">

    <button type="submit" name="log">Login</button>
    </form>
</body>
</html>