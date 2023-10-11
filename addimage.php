<?php
session_start();
require "datacon.php";

$hsid = $_SESSION['house_id'];

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Define the path to the houses folder
    $housesFolder = 'houses/';

    // Loop through each uploaded file and move it to the houses folder with a unique name
    foreach ($_FILES as $key => $file) {
        if ($file['error'] === UPLOAD_ERR_OK) {
            $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
            $newFileName = uniqid('img_') . '.' . $fileExtension;
            $destinationPath = $housesFolder . $newFileName;
            move_uploaded_file($file['tmp_name'], $destinationPath);

            // Update the image name in the housing table for the current house ID
            $hsid = $_SESSION['house_id'];
            $imageNumber = substr($key, -1);
            $imageFieldName = "image" . $imageNumber;
            $newImageName = $newFileName;
            // TODO: Replace the following lines with your database update query
            $query = mysqli_query($conn, "UPDATE housing SET $imageFieldName='$newImageName' WHERE hsid='$hsid'");
            // ...
        }
    }

    $query = mysqli_query($conn, "UPDATE housing SET status='complete' WHERE hsid='$hsid'");
    header('Location: myhouse.php?success=Your images have been uploaded successfully.');
    exit();
} else {
    // If the form was not submitted, redirect back to the page
    header('Location: index.php');
    exit();
}
