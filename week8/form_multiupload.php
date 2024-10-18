<!DOCTYPE html>
<html>

<head>
    <title>Multiupload Images</title>
    <style>
        img {
            width: 200px;
            height: auto;
            margin: 10px;
        }
    </style>
</head>

<body>

    <h2>Upload Multiple Images</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jpeg, .png, .gif">
        <input type="submit" value="Upload" />
    </form>

    <?php
    if (isset($_GET['uploaded']) && $_GET['uploaded'] == 'true') {
        $uploadedFiles = explode(',', $_GET['files']);
        echo "<h3>Thumbnails of Uploaded Images:</h3>";
        foreach ($uploadedFiles as $file) {
            echo "<img src='uploads/$file' alt='Uploaded Image'>";
        }
    }
    ?>
</body>
</html>