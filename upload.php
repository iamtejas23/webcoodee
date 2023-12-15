<?php
// Handle photo upload and insertion into the database

// Include database connection details
include("config.php");

// Check if the form was submitted
if (isset($_POST['upload'])) {
    $category = $_POST['category'];

    // Upload photo
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile);

    // Insert photo details into the database
    $filename = basename($_FILES["photo"]["name"]);
    $query = "INSERT INTO photos (category, filename) VALUES ('$category', '$filename')";
    mysqli_query($conn, $query);
}

// Redirect back to admin page
header("Location: admin.php");
exit();
?>
