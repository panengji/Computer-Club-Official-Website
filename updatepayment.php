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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update the record
    $PMethod = $_POST['PMethod'];
    $Name = $_POST['Name'];
    $Section = $_POST['Section'];
    $ReferenceNo = $_POST['ReferenceNo'];
    $Date = $_POST['Date'];
    
    $sql = "UPDATE payment SET PMethod='$PMethod', Name='$Name', Section='$Section', ReferenceNo='$ReferenceNo', Date='$Date' WHERE ReferenceNo='$ReferenceNo'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Fetch the payment record based on ReferenceNo
if (isset($_GET['ReferenceNo'])) {
    $ReferenceNo = $_GET['ReferenceNo'];
    
    $sql = "SELECT * FROM payment WHERE ReferenceNo='$ReferenceNo'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Payment record not found";
        exit();
    }
} else {
    echo "Invalid request";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Update Payment</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="ReferenceNo">Reference Number:</label>
                <input type="text" class="form-control" id="ReferenceNo" name="ReferenceNo" value="<?php echo $row['ReferenceNo']; ?>">
            </div>
            <div class="form-group">
                <label for="PMethod">Payment Method:</label>
                <input type="text" class="form-control" id="PMethod" name="PMethod" value="<?php echo $row['PMethod']; ?>">
            </div>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" id="Name" name="Name" value="<?php echo $row['Name']; ?>">
            </div>
            <div class="form-group">
                <label for="Section">Section:</label>
                <input type="text" class="form-control" id="Section" name="Section" value="<?php echo $row['Section']; ?>">
            </div>
            <div class="form-group">
                <label for="Date">Date:</label>
                <input type="date" class="form-control" id="Date" name="Date" value="<?php echo $row['Date']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
        </form>
    </div>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
