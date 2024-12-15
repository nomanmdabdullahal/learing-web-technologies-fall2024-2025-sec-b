<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['logout'])) {
    unset($_SESSION['name']);
    
    header("Location: login.php");
    exit();
}
?>

<html>
<head>
    <title>User Home Page</title>
</head>
<body>
    <fieldset>
   <h1>Welcome <?php echo $_SESSION['name']; ?>!</h1>
    <form method="POST">
   
     <a href="profile.php">Profile</a><br>
	 <a href="changepassword.php">Change Password</a><br>
	 <a href="login.php">Logout</a>
    </form>
	</fieldset>
</body>
</html>