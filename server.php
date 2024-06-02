<?php
// Start the session
session_start();

// Variables used
$username = "";
$email = "";
$password_1 ="";
$password_2 = "";
$errors = array();

// Connection to the Database - loginform, table - users
$db = mysqli_connect('localhost', 'root', '', 'loginform');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // Receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // Form validation: ensure that the form is correctly filled...
    // by adding (array_push()) corresponding error unto $errors array (which is not yet fixed)
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // Check if a user already exists with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // If user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    // Register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); // Encrypt the password before saving in the database
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: UserHomePage.php');
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    // Get username and password from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Validate form fields
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    // If there are no errors, proceed with login
    if (count($errors) == 0) {
        // Hash the password before comparing with the database
        $password = md5($password);

        // Query the database to check if username and password match
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) == 1) {
            // User found, start session and redirect to home page
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: UserHomePage.php');
        } else {
            // User not found, add error message
            array_push($errors, "Wrong username/password combination");
        }
    }
}

// Close database connection
mysqli_close($db);
?>
