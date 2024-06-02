<?php
// update.php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'loginform');

    // Check if the connection was successful
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Get form data
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Update user data in the database
    $update_users_query = "UPDATE users SET username=?, password=? WHERE email=?";
    $stmt = mysqli_prepare($db, $update_users_query);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $username, $password, $email);
        if (mysqli_stmt_execute($stmt)) {
            $affected_rows = mysqli_stmt_affected_rows($stmt);
            if ($affected_rows > 0) {
                echo "User data updated successfully!";
            } else {
                echo "No rows were affected. User data may already be up to date.";
            }
        } else {
            echo "Error executing the update statement: " . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing the update statement: " . mysqli_error($db);
    }

    // Close the database connection
    mysqli_close($db);
} else {
    // Redirect if accessed directly without form submission
    header('Location: crud_sample.php');
    exit();
}
?>
