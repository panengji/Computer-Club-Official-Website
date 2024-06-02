<?php
$servername = "localhost"; // Change to your database host
$dbname = "loginform"; // Change to your database name

// Create connection
$conn = new mysqli($servername, "root", "", $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $purpose = $conn->real_escape_string($_POST['purpose']);
    // For file upload, you need to handle file separately, I'll show it later
    $section = $conn->real_escape_string($_POST['section']);
    $position = $conn->real_escape_string($_POST['position']);
    $date = $conn->real_escape_string($_POST['date']);

    // Insert into database
    $sql = "INSERT INTO document (Purpose, Section, Position, Date) VALUES ('$purpose', '$section', '$position', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "Document uploaded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
