<?php
session_start();
$_SESSION['username']="Raj Karmakar";
$_SESSION['email']="test@test.com";
print_r($_SESSION);
?>
<p><a href="session2.php">See The Next Page</a></p>