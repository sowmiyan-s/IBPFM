<?php
// submit_report.php - Enhanced implementation with image upload and geolocation
require_once 'db_connect.php';

// Get form data
$name = $_POST['firstname'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$description = $_POST['description'] ?? '';
$lat = $_POST['latitude'] ?? null;
$lng = $_POST['longitude'] ?? null;

if (empty($name) || empty($email) || empty($address) || empty($description)) {
    die("Error: All required fields must be filled.");
}

// Handle Image Upload
$image_url = null;
if (isset($_FILES['report_image']) && $_FILES['report_image']['error'] === UPLOAD_ERR_OK) {
    $upload_dir = '../uploads/';
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    $file_ext = pathinfo($_FILES['report_image']['name'], PATHINFO_EXTENSION);
    $file_name = uniqid('report_', true) . '.' . $file_ext;
    $target_file = $upload_dir . $file_name;
    
    // Simple validation (should be more robust in production)
    $allowed_exts = ['jpg', 'jpeg', 'png', 'gif'];
    if (in_array(strtolower($file_ext), $allowed_exts)) {
        if (move_uploaded_file($_FILES['report_image']['tmp_name'], $target_file)) {
            $image_url = 'uploads/' . $file_name;
        }
    }
}

// Prepare SQL statement with new columns
$sql = "INSERT INTO reports (name, email, address, description, image_url, latitude, longitude) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Bind parameters (s = string, d = double)
$stmt->bind_param("sssssdd", $name, $email, $address, $description, $image_url, $lat, $lng);

// Execute and redirect
if ($stmt->execute()) {
    header("Location: ../success.html");
    exit();
} else {
    echo "Database Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
