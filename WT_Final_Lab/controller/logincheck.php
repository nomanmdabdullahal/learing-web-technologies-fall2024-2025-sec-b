<?php
session_start();

require_once '../model/emp_db.php'; 

if (isset($_POST['login'])) {
    $email = trim($_POST['usernm']);
    $password = trim($_POST['password']);

    if (empty($email)) {
        echo "<script>alert('Username can not be empty!'); window.location.href = '../view/login.php';</script>";
        exit();
    }

    $query = "SELECT * FROM employee WHERE username = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);


            if ($password === $user['password']) { 
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['username'];
                $_SESSION['user_name'] = $user['employee_name'];


            header("Location: ../view/admin_dashboard.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password!'); window.location.href = '../view/login.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('No account found with this email!'); window.location.href = '../view/login.php';</script>";
        exit();
    }
} else {
    header("Location: ../view/login.php");
    exit();
}
?>


