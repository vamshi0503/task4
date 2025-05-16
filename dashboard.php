<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
echo "Welcome, " . $_SESSION['username'] . "!<br>";
echo "Your role is: " . $_SESSION['role'] . "<br>";
?>
<a href="admin.php">Go to Admin Page</a><br>
<a href="logout.php">Logout</a>
