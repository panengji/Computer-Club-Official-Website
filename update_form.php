<?php
// update_form.php

// Check if email parameter is set
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['email'])) {
    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'loginform');

    // Check if the connection was successful
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Fetch user data based on email
    $email = $_GET['email'];
    $select_users_query = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_prepare($db, $select_users_query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $users = mysqli_fetch_assoc($result);

    // Check if user exists
    if ($users) {
        // Display the update form with existing data
?>
        <form id="updateForm" method="post" action="update.php">
         <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo isset($users['username']) ? $users['username'] : ''; ?>">
            <input type="email" name="email" value="<?php echo isset($users['email']) ? $users['email'] : ''; ?>">
            <label for="password">New Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter new password">
            <input type="submit" name="submit" value="Update">
        </form>
<?php
    } else {
        // User not found
        echo "User not found!";
    }

    // Close the database connection
    mysqli_close($db);
} else {
    // Redirect if accessed directly without email parameter
    header('Location: crud_sample.php');
    exit();
}
?>
