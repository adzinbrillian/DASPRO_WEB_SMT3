<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 2097152; // 2MB
    $uploadedFiles = array();

    $targetDirectory = "uploads/";
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    $totalFiles = count($_FILES['files']['name']); 

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowedExtensions)) {
            $errors[] = "File extension not allowed for $file_name. Only JPG, JPEG, PNG, GIF are allowed.<br>";
        }

        // Validate file size
        if ($file_size > $maxFileSize) {
            $errors[] = "File $file_name is too large. Maximum file size is 2 MB.<br>";
        }

        if (empty($errors)) {
            if (move_uploaded_file($file_tmp, $targetDirectory . $file_name)) {
                $uploadedFiles[] = $file_name;
            } else {
                $errors[] = "Failed to upload file $file_name.<br>";
            }
        }
    }

    if (empty($errors)) {
        echo "Files successfully uploaded: <br>";
        foreach ($uploadedFiles as $uploadedFile) {
            echo "$uploadedFile <br>";
        }
    } else {
        echo implode("", $errors); 
    }
} else {
    echo "No files uploaded.";
}
?>