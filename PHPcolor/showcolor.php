<?php
$color = isset($_COOKIE['user_color']) ? $_COOKIE['user_color'] : "not set";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Color</title>
</head>
<body>
    <p>Your selected color is: <strong><?php echo $color; ?></strong></p>
</body>
</html>
<?php
