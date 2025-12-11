<?php

session_start();

if (isset($_GET['reset'])) {
    unset($_SESSION['visit_count']);
    header("Location: session_counter.php");
    exit();
}


if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = 1;
} else {
    $_SESSION['visit_count']++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Visit Counter</title>
</head>
<body>

<h2>PHP Session Visit Counter</h2>

<p>
    You have visited this page 
    <strong><?php echo $_SESSION['visit_count']; ?></strong> 
    times in this session.
</p>

<!-- Reset button -->
<a href="session_counter.php?reset=1">Reset Counter</a>

</body>
</html>
