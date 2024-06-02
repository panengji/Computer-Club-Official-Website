<?php include("server.php")?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="signupstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
<body>
    <div class="container">
    <form method="post" action="register.php" class="signup-box">
        <h1>Sign Up</h1>
        <div class="input">
            <h2>Username</h2>
            <input type="text" name="username" value="<?php echo $username; ?>" class="inputbox">
        </div>
        <div class="input">
           <h2>Email</h2>
            <input type="email" name="email" value="<?php echo $email; ?>" class="inputbox">
        </div>
        <div class="input">
            <h2>Password</h2>
            <input type="password" name="password_1" class="inputbox" >
        </div>
        <div class="input">
           <h2>Confirm Password</h2>
            <input type="password" name="password_2" class="inputbox">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p> Already a member?<a href="login.php" class="Signin"> Sign in</a> </p>
    </form>
    </div>
</body>
</html>
