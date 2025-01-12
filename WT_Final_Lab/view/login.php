<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <div>
        <form method="POST" action="../controller/logincheck.php">
            <h2>Login</h2>
            <b>Username:</b><br>
            <input type="email" name="usernm" placeholder="Enter your username" required><br>

            <b>Password:</b><br>
            <input id="password" type="password" name="password" placeholder="Enter your password" required><br>

            <b>Remember Me</b>
            <input type="checkbox" name="remember" id="remember">

            <input type="submit" name="login" value="Login"><br>
        </form>

            <a href="../view/forgot_password.php"><b>Forgot Password?</b></a>
        
            <a href="../controller/registration.php"><b>Register here</b></a>
        
</body>
</html>
