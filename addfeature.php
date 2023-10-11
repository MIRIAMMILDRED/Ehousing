<?php
session_start();

require "datacon.php";

// Get the form data
$indoor_features = implode(':', $_POST['indoor_features']);
$outdoor_features = implode(':', $_POST['outdoor_features']);
$other_indoor_features = str_replace(',', ':', $_POST['other_indoor_features']);
$other_outdoor_features = str_replace(',', ':', $_POST['other_outdoor_features']);

// Concatenate all features separated by colons
$all_indoor_features = $indoor_features . ':' . $other_indoor_features;
$all_outdoor_features = $outdoor_features . ':' . $other_outdoor_features;

// Prepare and bind the SQL statement
$stmt = $conn->prepare("UPDATE housing SET indoor_features = ?, outdoor_features = ? WHERE hsid = ?");
$stmt->bind_param("ssi", $all_indoor_features, $all_outdoor_features, $house_id);

// Get the house_id from the session
$house_id = $_SESSION['house_id'];

// Execute the prepared statement
if ($stmt->execute()) {
    header("Location: addimagesform.php?success=Features updated successfully.");
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();

?>
