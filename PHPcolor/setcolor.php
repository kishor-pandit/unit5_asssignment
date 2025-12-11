<?php
if (isset($_POST['color'])) {
    // Set cookie for 1 hour
    setcookie("user_color", $_POST['color'], time() + 3600, "/");
    echo "Cookie has been set! <a href='show_color.php'>Go to color page</a>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select Color</title>
</head>
<body>
    <form method="post" action="">
        <label>Select a color:</label><br>
        <select name="color">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
        </select>
        <br><br>
        <input type="submit" value="Save Color">
    </form>
</body>
</html>
