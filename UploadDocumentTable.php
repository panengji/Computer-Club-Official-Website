<?php
// Establish database connection
$servername = "localhost"; // Change to your database host
$dbname = "loginform"; // Change to your database name

// Create connection
$conn = new mysqli($servername, "root", "", $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <title>Document Management</title>
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
            width: 32.6%;
            margin: 19px auto;
        }
        .table-container {
            width: 90%;
            margin: 20px auto;
        }

        .table-container h2{
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
        .container {
            width: 90%;
            margin: 0 auto;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        
        th {
            background-color: #952323;
            color: white;
            padding: 10px;
            text-align: left;
        }
        
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
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
            <a href="PaymentTable.php">Payments</a>
            <a href="UploadDocumentTable.php">Documents</a>
            <a href="MessageTable.php">Messages</a>
        </div>
    </div>

    <div class="table-container">
        <h2>Document Management</h2>
        <table>
            <thead>
                <tr>
                    <th>Purpose</th>
                    <th>Section</th>
                    <th>File</th>
                    <th>Position</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch documents from the database
                $sql = "SELECT * FROM document";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Purpose'] . "</td>";
                        echo "<td>" . $row['Section'] . "</td>";
                        echo "<td><a href='uploads/" . $row['Upload'] . "' target='_blank'>" . $row['Upload'] . "</a></td>";
                        echo "<td>" . $row['Position'] . "</td>";
                        echo "<td>" . $row['Date'] . "</td>";
                        // echo "<td><a href='edit.php?id=" . $row['id'] . "' class='btn btn-sm btn-primary'>Edit</a>
                        //       <a href='delete.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger'>Delete</a></td>";
                        // echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No documents found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
