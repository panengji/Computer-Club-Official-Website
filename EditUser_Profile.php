<?php
// Start the session
session_start();

// Variables used
$email = "";
$username = "";
$password = "";
$errors = array();

// Connection to the Database - loginform, table - users
$db = mysqli_connect('localhost', 'root', '', 'loginform');

// Check if form is submitted for updating user details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // SQL update query
    $sql = "UPDATE users SET email='$email', username='$username', password='$password' LIMIT 1";

    if (mysqli_query($db, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($db);
    }
}

// Fetch data from the database to pre-populate the form
$sql = "SELECT * FROM users LIMIT 1";
$result = mysqli_query($db, $sql);

// Check if there are rows returned from the query
if ($result && mysqli_num_rows($result) > 0) {
    // Fetch the row as an associative array
    $row = mysqli_fetch_assoc($result);
} else {
    echo "No user found";
}

// Close database connection
mysqli_close($db);
?>
