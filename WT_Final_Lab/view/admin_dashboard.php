<?php
session_start();


require_once '../model/emp_db.php';


if (!isset($_SESSION['user_type'])) {
    header("Location: ../view/login.php"); 
    exit();
}


?>
<html>
<head>
    <title>Admin Dashboard</title>    
</head>
<body>
        <h1>Admin Dashboard</h1>
        <h2>Admin Panel</h2>
        <ul>
            
            <li><a href="../view/Search.php">User Info</a></li>
            <li><a href="../view/edit.php">Update</a></li>
            <li><a href="../view/delete.php">Delete</a></li> 
            <li><a href="../controller/logout.php">Logout</a></li>
        </ul>

        <h3>Welcome to the Admin Dashboard</h3>

</body>
</html>
