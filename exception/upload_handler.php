<?php

class FileUploadException extends Exception {}

try {
    if (!isset($_FILES['fileInput']) || $_FILES['fileInput']['error'] !== UPLOAD_ERR_OK) {
        throw new FileUploadException("No file uploaded or upload error occurred.");
    }

    $file = $_FILES['fileInput'];
    $fileName = $file['name'];
    $fileTmp  = $file['tmp_name'];

    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    if ($ext !== 'txt') {
        throw new FileUploadException("Invalid file type. Only .txt files are allowed.");
    }
    $destination = "uploads/" . basename($fileName);

    if (!move_uploaded_file($fileTmp, $destination)) {
        throw new FileUploadException("Failed to save uploaded file.");
    }

    echo "File uploaded successfully: <strong>$fileName</strong>";

} catch (FileUploadException $e) {

    echo "Custom Error: " . $e->getMessage();

} finally {

    echo "<br>Upload process finished.";

}

?>
