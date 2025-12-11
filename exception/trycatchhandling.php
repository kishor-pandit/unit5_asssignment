<?php
    class FileUploadException extends Exception {}
    $fileInput = $_FILES['fileInput'] ?? null;
    try {
        if(!$fileInput || $fileInput['error'] !== UPLOAD_ERR_OK){
            throw new Exception("No file uploaded. File: " . ($fileInput['name'] ?? 'N/A'), 401);
        }
        $fileName = $fileaInput['name'];
        if(pathinfo($fileName, PATHINFO_EXTENSION) !== 'txt'){
            throw new Exception("Invalid file type. Only .txt files are allowed.",402);
        }
    } catch (Exception $e) {
        echo "Error: ".$e->getMessage()." Code: ".$e->getCode();
    }finally{
        echo "\nFile upload attempt completed.";
    }
?>