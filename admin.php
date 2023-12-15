<?php
session_start();
include('config.php');

// Check if the user is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

$uploadDir = 'uploads/';

// Add photo to the database
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_photo'])) {
    $category = $_POST['category'];
    $filename = $_FILES['photo']['name'];
    $priority = $_POST['priority'];

    // Upload photo to a folder (make sure the folder has write permissions)
    $uploadFile = $uploadDir . basename($filename);

    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile);

    // Insert photo info into the database
    $sql = "INSERT INTO photos (category, filename, priority) VALUES ('$category', '$filename', $priority)";
    $conn->query($sql);
}

// Delete photo from the database
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_photo'])) {
    $photoId = $_POST['delete_photo'];

    // Get the filename from the database
    $sqlSelect = "SELECT filename FROM photos WHERE id = $photoId";
    $resultSelect = $conn->query($sqlSelect);

    if ($resultSelect->num_rows > 0) {
        $photo = $resultSelect->fetch_assoc();
        $filenameToDelete = $uploadDir . $photo['filename'];

        // Check if the file exists before attempting to unlink
        if (file_exists($filenameToDelete)) {
            unlink($filenameToDelete);
        }

        // Delete photo from the database
        $sqlDelete = "DELETE FROM photos WHERE id = $photoId";
        $conn->query($sqlDelete);
    }
}

// Fetch photos from the database
$sql = "SELECT * FROM photos ORDER BY priority DESC";
$result = $conn->query($sql);
$photos = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <h1>Welcome, Admin!</h1>

    <form action="admin.php" method="post" enctype="multipart/form-data">
        <label for="category">Category:</label>
        <input type="text" name="category" required>

        <label for="photo">Photo:</label>
        <input type="file" name="photo" accept="image/*" required>

        <label for="priority">Priority:</label>
        <input type="number" name="priority" value="0" required>

        <button type="submit" name="add_photo">Add Photo</button>
    </form>

    <div class="photo-gallery">
        <?php foreach ($photos as $photo): ?>
            <div class="photo">
                <img src="uploads/<?php echo $photo['filename']; ?>" alt="<?php echo $photo['category']; ?>">
                <p>Category: <?php echo $photo['category']; ?></p>
                <p>Priority: <?php echo $photo['priority']; ?></p>
                <form action="admin.php" method="post">
                    <input type="hidden" name="delete_photo" value="<?php echo $photo['id']; ?>">
                    <button type="submit">Delete</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
<!-- menu icons  -->

<!-- end -->

    <a href="logout.php">Logout</a>
</body>

</html>
