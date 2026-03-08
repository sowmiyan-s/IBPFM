<?php
// submit_report.php - Processes the report form submission
require_once 'db_connect.php';

// Get form data
$name = $_POST['firstname'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$description = $_POST['description'] ?? '';

if (empty($name) || empty($email) || empty($address) || empty($description)) {
    die("Error: All fields are required.");
}

// Prepare SQL statement
// Added 'status' and 'created_at' in the table, but we use defaults here
$sql = "INSERT INTO reports (name, email, address, description) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Bind parameters
$stmt->bind_param("ssss", $name, $email, $address, $description);

// Execute and redirect
if ($stmt->execute()) {
    // Redirect to success page (assuming it's in the root folder)
    header("Location: ../success.html");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
