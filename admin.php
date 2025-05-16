<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    echo "Access denied!";
    exit;
}
echo "Welcome Admin, " . $_SESSION['username'];
?>
<br><a href="dashboard.php">Back to Dashboard</a>
