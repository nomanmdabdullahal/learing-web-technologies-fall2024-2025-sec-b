<?php
session_start();


require_once '../model/emp_db.php';


if (!isset($_SESSION['user_id'])) {
    header("Location: ../view/login.php"); 
    exit();
}


$user_id = $_SESSION['user_id'];


$query = "SELECT employee_name, contact_no, username FROM employee WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
} else {
    echo "<script>alert('User not found.'); window.location.href = '../view/user.php';</script>";
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emp_name = trim($_POST['empname']);
    $contactnumber = trim($_POST['contact']);
    $email = trim($_POST['usernm']);

    if(empty(trim($emp_name))) {
        echo "<script>alert('Employee name can not be empty!'); window.location.href = '../view/edit.php';</script>";
    }

    
    if (strlen($contactnumber) != 10) {
        echo "<script>alert('Contact number must be 11 digits.'); window.location.href = '../view/edit.php';</script>";
        exit();
    }

    
    if(empty(trim($email))) {
        echo "<script>alert('Please enter a valid username.'); window.location.href = '../view/edit.php';</script>";
        exit();
    }

    
    $update_query = "UPDATE employee SET employee_name = ?, contact_no = ?, username = ?, WHERE id = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param("sis", $emp_name, $contactnumber, $email);

    if ($update_stmt->execute()) {
        echo "<script>alert('Profile updated successfully!'); window.location.href = '../view/profile.php';</script>";
    } else {
        echo "<script>alert('Error updating profile. Please try again later.'); window.location.href = '../view/edit.php';</script>";
    }
}
?>

<html>
<head>
    <title>Update</title>
</head>
<body>
        <h2>Update Profile</h2>
        <form action="../view/edit.php" method="POST">
                <b>Employee Name</b>
                <input type="text"  name="empname" value="<?php echo htmlspecialchars($user['emp_name']); ?>" required>
            
                <b> Contact Number</b>
                <input type="text"  name="contact" value="<?php echo htmlspecialchars($user['contactnumber']); ?>" required>
        
                <b>Username</b>
                <input type="email"  name="usernm" value="<?php echo htmlspecialchars($user['email']); ?>" required>
    
                <button type="submit">Save Changes</button>
        </form>
</body>
</html>
