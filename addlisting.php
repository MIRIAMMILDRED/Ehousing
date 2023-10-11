<?php

require "datacon.php";

function get_video_id($url) {
    $query_string = parse_url($url, PHP_URL_QUERY);
    parse_str($query_string, $query_params);
    return isset($query_params['v']) ? $query_params['v'] : '';
  }
  
session_start();
$userid = $_SESSION['user_id'];
$house_id = uniqid();
$_SESSION['house_id'] = $house_id;
// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO housing (hsid, owner, house_type, rent_amount, rent_type, house_description, security_deposit, release_policy, address_and_area, house_size, room_description, tour,county_location, constituency) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sisdssisisssss", $house_id, $userid, $house_type, $rent_amount, $rent_type, $house_description, $security_deposit, $release_policy, $address_and_area, $house_size, $room_description, $video_id, $county, $constituency);

// Get the form data
$house_type = $_POST['house_type'];
$house_description = $_POST['house_description'];
$address_and_area = $_POST['location_description'];
$house_size = $_POST['house_size'];
$room_description = $_POST['room_description'];
$rent_type = $_POST['rent_type'];
$rent_amount = $_POST['rent_amount'];
$security_deposit = $_POST['security_deposit'];
$release_policy = $_POST['release_policy'];
$tour = $_POST['tour'];
$video_id = get_video_id($tour); 
$county = $_POST['county'];
$constituency = $_POST['subcounty'];

// Execute the prepared statement
if ($stmt->execute()) {
    header("Location: addfacilitiesform.php?success=Your listing has been added.");
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();

?>
