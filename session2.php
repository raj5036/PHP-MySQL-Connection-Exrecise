<?php
    session_start();
    // print_r($_SESSION);
    echo("Your name is ".$_SESSION['username']);
?>
<p><a href="logout.php">LogOut</a></p>