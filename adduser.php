<?php
// Database connection details
require "datacon.php";

// Get the form data
$user_username = $_POST['username'];
$user_email = $_POST['email'];
$user_password = $_POST['password'];
$accept_terms = $_POST['accept_terms'];

// Check if the user has agreed to the terms
if ($accept_terms != "on") {
    header("Location: index.php?error=You must agree to the terms to register.");
    exit;
}

// Validate and sanitize input
if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    header("Location: index.php?error=Please provide a valid email address");
    exit;
}

// Password hashing for security
$user_password_hashed = password_hash($user_password, PASSWORD_DEFAULT);

// Prepare and bind the SQL statement
$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $user_username, $user_email, $user_password_hashed);

// Execute the prepared statement and check for errors
if ($stmt->execute()) {
    session_start();
    $_SESSION['user_id'] = $row['id'];
    header("Location: index.php?success=Your account has been created. You can now log in.");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the prepared statement and the connection
$stmt->close();
$conn->close();
?>
