<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload TXT File</title>
</head>
<body>

<h2>Upload a .txt File</h2>

<form action="upload_handler.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileInput">
    <br><br>
    <input type="submit" value="Upload File">
</form>

</body>
</html>
