<?php include("server.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN FORM</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
<body>
    <div class="container">
        <form method="post" action="login.php" name="loginForm" class="login-box"> <!-- Changed action to server.php -->
            <h1>Login</h1>
            <?php include('error.php'); ?> <!-- Include error messages -->
            <div class="input">
                <h2>Username</h2>
                <input type="text" name="username" value="<?php echo $username; ?>" class="inputbox">
            </div>  
            <div class="input">
                <h2>Password</h2>
                <input type="password" name="password" class="inputbox">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p> Not yet a member? <a href="register.php" class="SignUp">Sign up</a> </p>
        </form>
    </div>
</body>
</html>
