<?php
// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'loginform');

// Check if the connection was successful
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Check if the delete button is clicked and if the email parameter is set in the URL
if(isset($_GET['email'])) {
    // Sanitize and validate the email
    $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);

    // Delete the user from the database
    $query = "DELETE FROM users WHERE email=?";
    
    // Prepare the statement
    $stmt = mysqli_prepare($db, $query);
    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "s", $email);
        
        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Check if any rows were affected
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo "User deleted successfully.";
            } else {
                echo "No user found with that email.";
            }
        } else {
            echo "Error executing deletion statement: " . mysqli_error($db);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing deletion statement: " . mysqli_error($db);
    }

    // Redirect back to the page after deletion
    header('Location: crud_sample.php');
    exit();
} else {
    // Redirect if the delete button is not clicked
    header('Location: crud_sample.php');
    exit();
}

// Close the database connection
?>
