<?php
require "datacon.php";
session_start();

if(!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// Prepare and execute the SQL query
$stmt = $conn->prepare("UPDATE users SET full_names=?, phone_number=?, gender=? WHERE id=?");
$stmt->bind_param("sssi", $_POST['fullnames'], $_POST['Phonenumber'], $_POST['gender'], $_SESSION['user_id']);
$result = $stmt->execute();

// Check for errors
if ($result === false) {
    die("Error updating user: " . $conn->error);
}

// Redirect to the profile page
header("Location: profile.php?success=Your profile has been updated.");
exit();
?>
