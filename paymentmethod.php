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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $PMethod = $_POST['Pmethod'];
    $Name = $_POST['Name'];
    $Section = $_POST['Section'];
    $ReferenceNo = $_POST['ReferenceNo'];
    $Date = $_POST['Date'];

    // Prepare SQL statement
    $sql = "INSERT INTO payment (PMethod, Name, Section, ReferenceNo, Date) VALUES (?, ?, ?, ?, ?)";
    
    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $PMethod, $Name, $Section, $ReferenceNo, $Date);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Payment record inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        // Log the SQL query for debugging purposes
        error_log("Error executing SQL query: " . $sql);
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
