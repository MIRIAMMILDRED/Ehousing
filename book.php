<?php
require "datacon.php";

session_start();
function saveBooking($userId, $houseid,$fullName, $phoneNumber, $email, $familyMembers, $children, $message) {
    global $conn;

    // Sanitize the form data to prevent SQL injection
    $fullName = mysqli_real_escape_string($conn, $fullName);
    $phoneNumber = mysqli_real_escape_string($conn, $phoneNumber);
    $email = mysqli_real_escape_string($conn, $email);
    $familyMembers = mysqli_real_escape_string($conn, $familyMembers);
    $children = mysqli_real_escape_string($conn, $children);
    $message = mysqli_real_escape_string($conn, $message);

    // Build the SQL query to insert the booking information
    $sql = "INSERT INTO bookings (user_id, hsid, full_name, phone_number, email, family_members, children, message)
            VALUES ('$userId', '$houseid', '$fullName', '$phoneNumber', '$email', '$familyMembers', '$children', '$message')";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check for errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Close the database connection
    mysqli_close($conn);
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $hsid = $_POST['hsid'];
    $fullName = $_POST['FirstName'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['Email'];
    $familyMembers = $_POST['members'];
    $children = $_POST['children'];
    $message = $_POST['message'];


    // Validate the form data (e.g., ensure required fields are not empty)
    if (empty($fullName) || empty($phoneNumber) || empty($email)) {
        die("Please fill in all required fields.");
    }

    // Save the booking information to the database (replace with your own function)
    saveBooking($_SESSION['user_id'], $hsid, $fullName, $phoneNumber, $email, $familyMembers, $children, $message);

    // Redirect the user to a success page (replace with your own page)
    header('Location: profile.php?success=Your booking has been saved.');
    exit();
}

?>
