<?php
$targetDirectory = "uploads/";

// Check if the directory exists, if not, create it
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

$uploadedFiles = array();

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // Loop through all uploaded files
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = basename($_FILES['files']['name'][$i]);
        $targetFile = $targetDirectory . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Only allow certain file formats
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($fileType, $allowedExtensions)) {
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName successfully uploaded.<br>";
                $uploadedFiles[] = $fileName;
            } else {
                echo "Failed to upload file $fileName.<br>";
            }
        } else {
            echo "Invalid file type for $fileName.<br>";
        }
    }
    // Redirect back to form with uploaded files list
    if (!empty($uploadedFiles)) {
        $fileNames = implode(',', $uploadedFiles);
        header("Location: form_multiupload.php?uploaded=true&files=" . urlencode($fileNames));
        exit();
    }
} else {
    echo "No files were uploaded.";
}
?>