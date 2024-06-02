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

// Fetch payment records from the database
$sql = "SELECT * FROM payment";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <title>User's Payment List</title>
    <style>

    * {
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
.container {
  width: 400px; /* Adjust container width as needed */
  margin: 0 auto; /* Center the container */
  margin-top: 5px;
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
        .nav-container {
            width: 32.5%;
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
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
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
        
        a {
            text-decoration: none;
            color: #fff;
            padding: 6px 12px;
            border-radius: 4px;
        }
        
        .btn-primary {
            background-color: #952323;
        }
        
        .btn-danger {
            background-color: #dc3545;
        }
        
        .btn-primary:hover, .btn-danger:hover {
            opacity: 0.8;
        }
        .list {
            border: 2px solid maroon;
            background-color: white;
            color: maroon;
            text-decoration: none;
            display: inline-block; /* Ensures the border fits the content */
            padding: 5px 20px;
            border-radius: 5px;
            margin-left: 85%;
            margin-top: 10%;
        /* Adjust padding as needed */
        }

        .list-totable {
            text-decoration: none; /* Remove underline on link */
            color: maroon; /* Set text color */
        }

        .list-totable:hover {
            color: maroon; /* Set hover color */
        }
            </style>
</head>
<body>
    <!-- HTML for the logos -->
    <img class="lspu" src="lspu.png">
    <img class="ccs" src="NewLogoCCS.png">
    <img class="background" src="bgall.png">

    <!-- HTML for the navigation bar -->
    <div class="nav-container">
        <div class="navbar">
            <a href="PaymentTable.php">Payments</a>
            <a href="UploadDocumentTable.php">Documents</a>
            <a href="MessageTable.php">Messages</a>
        </div>
    </div>
    <div class="table-container">
        <h2>Payment List</h2>
        <table>
            <thead>
                <tr>
                    <th>Payment Method</th>
                    <th>Name</th>
                    <th>Section</th>
                    <th>Reference Number</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["PMethod"] . "</td>";
                        echo "<td>" . $row["Name"] . "</td>";
                        echo "<td>" . $row["Section"] . "</td>";
                        echo "<td>" . $row["ReferenceNo"] . "</td>";
                        echo "<td>" . $row["Date"] . "</td>";
                        echo "<td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No payment records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="list">
        <a href="UserAccount.php" class="list-totable">Back</a>
    </div>
    
</body>
</html>

<?php
// Close connection
$conn->close();
?>
