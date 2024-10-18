<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <style>
        img {
            width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile" required>
        <input type="submit" name="submit" value="Upload">
    </form>

    <?php
    if (isset($_GET['uploaded']) && $_GET['uploaded'] == 'true') {
        $targetfile = $_GET['file'];
        echo "<h3>Thumbnail of Uploaded Image:</h3>";
        echo "<img src='$targetfile' width='200' alt='Uploaded Image'>";
    }
    ?>
</body>
</html>