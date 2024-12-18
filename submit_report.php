<?php

$servername = "localhost";
$username = "root";  
$password = "";  
$dbname = "reports_db"; 


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['firstname'];
$email = $_POST['email'];
$address = $_POST['address'];
$description = $_POST['description'];


$sql = "INSERT INTO reports (name, email, address, description) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);


if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}


$stmt->bind_param("ssss", $name, $email, $address, $description);


if ($stmt->execute()) {
    header("Location: success.html");
    exit();
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>

