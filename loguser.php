<?php
// Start the session
session_start();

// Database connection details
require "datacon.php";

// Get the form data
$user_username = $_POST['username'];
$user_password = $_POST['password'];

echo $user_username." ".$user_password;
// Prepare and bind the SQL statement
$sql = "SELECT id, password FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_username);

// Execute the prepared statement and store the result
$stmt->execute();
$result = $stmt->get_result();

echo $result->num_rows;
// Check if the user is found and verify the password
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($user_password, $row['password'])) {
        // Store user id in the session and redirect to a logged-in page
        $_SESSION['user_id'] = $row['id'];
        header("Location: index.php?success=Welcome back $user_username.");
        exit;
    } else {
    header("Location: index.php?error=Please enter the correct password.");
    }
} else {
    echo "User not found";
}

// Close the prepared statement and the connection
$stmt->close();
$conn->close();
?>
