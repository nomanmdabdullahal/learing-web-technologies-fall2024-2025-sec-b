<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <h2>Registration</h2>

            <b>Employee Name<br>
            <input type="text" name="empname" placeholder="Enter your employee name" required>
            <br><br>

            <b>Contact Number</b><br>
            <input type="text" name="contact" placeholder="Enter contact number" required>
            <br><br>

            <b>Email</b><br>
            <input type="email" name="usernm" placeholder="Enter your username" required>
            <br><br>

            <b>Password</b><br>
            <input type="password" name="password" placeholder="Enter your password" required>
            <br><br>

            <b>Confirm Password</b><br>
            <input type="password" name="cpassword" placeholder="Re-enter your password" required>
            <br><br>

            <input type="submit" name="submit" value="Register"><br>
        </form>

            <p>Already have an account? <a href="../view/login.php">Login here</a></p>
    <?php
    session_start();

    require_once '../model/emp_db.php';

    if (isset($_POST['submit'])) {
        $emp_name = trim($_POST['empname']);
        $contactnumber = trim($_POST['contact']);
        $email = trim($_POST['usernm']);
        $password = trim($_POST['password']);
        $cpassword = trim($_POST['cpassword']);

        $errors = [];

        if(empty(trim($emp_name))){
            $errors[] = "Employee name can not be empty";
        }


        if (strlen($contactnumber) != 11 || !is_numeric($contactnumber)) {
            $errors[] = "Phone number must be 11 digits.";
        }

        if(empty(trim($email))){
            $errors[] = "Username can not be empty";
        }

        if (strlen($password) < 8) {
            $errors[] = "Password must be at least 8 characters long.";
        }

        if ($password !== $cpassword) {
            $errors[] = "Passwords do not match.";
        }

        $emailCheckQuery = "SELECT * FROM employee WHERE username = '$email'";
        $emailCheckResult = mysqli_query($conn, $emailCheckQuery);

        if (mysqli_num_rows($emailCheckResult) > 0) {
            $errors[] = "An account with this email already exists.";
        }

        if (empty($errors)) {
            $sql = "INSERT INTO employee (employee_name, contact_no, username, password)
            VALUES ('$emp_name','$contactnumber','$email', '$password')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $_SESSION['success'] = "Registration successful. Please log in.";
                header("Location: ../view/login.php");
                exit();
            } else {
                echo "<script>alert('Error: Could not register.');</script>";
            }
        } else {
            foreach ($errors as $error) {
                echo "<script>alert('$error');</script>";
            }
        }
    }
    ?>

