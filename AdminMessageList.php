<?php
// Establish connection to the database
$servername = "localhost"; // Change to your database host
$dbname = "loginform"; // Change to your database name

// Create connection
$conn = new mysqli($servername, "root", "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data if submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $section = $_POST['section'];
    $purpose = $_POST['purpose'];
    $message = $_POST['message'];
    $date = $_POST['date'];

    // SQL query to insert data into the message table
    $sql_insert = "INSERT INTO message (Name, Section, Purpose, Message, Date)
                   VALUES ('$name', '$section', '$purpose', '$message', '$date')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}

// SQL query to retrieve messages from the database
$sql_select = "SELECT * FROM message";
$result = $conn->query($sql_select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <title>Admin Message Lists</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        
        .background {
            width: 100%;
            height: auto;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1; 
            object-fit: cover;
        }
        
        /* CSS for the navigation bar */
        .nav-container {
            width: 40%;
            margin: 19px auto;
        }

        .table-container {
            width: 90%;
            margin: 20px auto;
        }

        .title{
            color: #fff;
            text-align: center;
            margin-bottom: 10px;
            font-size: 32px;
        }
        
        .navbar {
            background-color: #952323;
            overflow: hidden;
            border-radius: 10px;
        }
        
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            padding-left: 29px;
        }
        
        .navbar a:hover {
            background-color: white;
            color: #952323;
        }
        
        /* CSS for logos */
        .lspu, .ccs {
            float: left;
            height: 40px; /* Adjust logo height as needed */
            margin-right: 20px; 
            margin-top: 5px;
            margin-left: 5px;/* Add space between logos and links */
        }
        
        /* CSS for the table */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        
        th {
            background-color: #952323;
            color: white;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <img class="background" src="bgall.png">
    <!-- HTML for the logos -->
    <img class="lspu" src="lspu.png">
    <img class="ccs" src="NewLogoCCS.png">

    <!-- HTML for the navigation bar -->
    <div class="nav-container">
        <div class="navbar">
            <a href="AdminPanel.php">Users</a>
            <a href="AdminPaymentList.php">Payments</a>
            <a href="AdminDocumentsList.php">Documents</a>
            <a href="AdminMessageList.php">Messages</a>
        </div>
    </div>
    <h2 class="title" >Message Lists</h2>
    <table class="table-container">
        <thead>
            <tr>
                <th>Name</th>
                <th>Section</th>
                <th>Purpose</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['Name']."</td>";
                    echo "<td>".$row['Section']."</td>";
                    echo "<td>".$row['Purpose']."</td>";
                    echo "<td>".$row['Message']."</td>";
                    echo "<td>".$row['Date']."</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No messages found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
$conn->close();
?>
