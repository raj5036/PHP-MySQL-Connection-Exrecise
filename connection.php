<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $db         = "my_first_database";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn)
        die("Connection failed :".mysqli_connect_error());
    else {
        echo("Connected Successfully!!");
    }
?>