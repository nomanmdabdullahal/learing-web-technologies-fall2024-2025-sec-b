<?php

session_start();

require_once '../model/emp_db.php';

if (!isset($_SESSION['user_type'])) {
    header("Location: ../view/login.php"); 
    exit();
}

if (isset($_POST['delete'])) {
    $email = trim($_POST['usernm']);

    if (!empty($email)) {
        $delete_query = "DELETE FROM employee WHERE username = ?";
        $stmt = $conn->prepare($delete_query);
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Account deleted successfully!'); window.location.href = '../view/delete.php';</script>";
            } else {
                echo "<script>alert('No account found with this username.');</script>";
            }
        } else {
            echo "<script>alert('Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Please enter a valid username.');</script>";
    }
}
 
$query = "SELECT * FROM employee";
$result = $conn->query($query);
?>
<html>
<head>
    <title>Delete Account</title>
</head>
<body> 
        <form method="POST" action="">
            <b>Enter user Email to Delete Account:</b><br>
            <input type="email" name="usernm" placeholder="Your Email" required><br>
            <button type="submit" name="delete">Delete Account</button>
        </form>
    </div>
</body>
</html>
