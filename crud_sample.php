<?php
$db = mysqli_connect('localhost', 'root', '', 'loginform');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if (isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($db, $query);
    mysqli_close($db);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>User Table</title>
    <style>
        body {
            font-family: Poppins, Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: maroon;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            position: relative;
            margin: 20px auto;
            width: 80%; /* Adjust as needed */
        }

        .add-user-btn {
            position: absolute;
            top: -30px; /* Adjust as needed for vertical positioning */
            right: 1px; /* Adjust as needed for horizontal positioning */
            color: maroon;
            text-decoration: none;
            padding: 6px 12px;
            border: 1px solid maroon;
            border-radius: 4px;
            background-color: #f3f3f3;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .add-user-btn:hover {
            background-color: maroon;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        #user_table{
            margin-top: 50px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: maroon;
            color: white;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #ddd;
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity as needed */
            z-index: 9999;
            display: none;
        }

        .modal {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ddd;
            padding: 20px;
            border-radius: 5px;
            z-index: 10000;
            display: none;
        }

        .modal input[type="text"],
        .modal input[type="email"],
        .modal input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .modal input[type="submit"] {
            background-color: maroon;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal input[type="submit"]:hover {
            background-color: #800000;
        }

        /* CSS for Update and Delete links */
        td a {
            color: maroon;
            text-decoration: none;
            padding: 6px 12px; /* Add padding to make the links more clickable */
            border: 1px solid maroon; /* Add a border for a button-like appearance */
            border-radius: 4px; /* Rounded corners */
            background-color: #f3f3f3; /* Light gray background color */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition effect */
        }

        td a:hover {
            background-color: maroon; /* Change background color on hover */
            color: white; /* Change text color on hover */
        }

        /* Navigation Bar */
        .navbar {
            background-color: maroon;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .active {
            background-color: #800000;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>User Management System</h1>
    </header>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="#" class="active">Home</a>
        <a href="#student-list">Student List</a>
        <a href="#payments-list">Payments List</a>
    </div>

    <!-- Container for the main content -->
    <div id="student-list" class="container">
        <button class="add-user-btn" id="showFormBtn">Add User</button>

        <div class="modal-overlay" id="modalOverlay"></div>

        <div class="modal" id="userForm">
            <h2>Add User</h2>
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
                <input type="submit" name="add_user" value="Add User">
            </form>
        </div>

        <table id="user_table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch user data including only the 'email' column
                $select_users_query = "SELECT username, email, password FROM users";
                $select_users_result = mysqli_query($db, $select_users_query);

                if ($select_users_result) {
                    while ($row = mysqli_fetch_assoc($select_users_result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['username'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['password'] ?></td>
                            <td>
                            <a href="#" onclick="openUpdateForm('<?php echo $row['email']; ?>')">Update</a>
                            <a href="delete.php?email=<?php echo $row['email']; ?>">Delete</a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        document.getElementById("showFormBtn").addEventListener("click", function() {
            document.getElementById("modalOverlay").style.display = "block";
            document.getElementById("userForm").style.display = "block";
        });
        function openUpdateForm(email) {
            window.location.href = 'update_form.php?email=' + email;
        }
    </script>
</body>
</html>
