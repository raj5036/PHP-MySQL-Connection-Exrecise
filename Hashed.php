<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $password="Raj Loves Subarna But he Doesn't Get Anything In Return";
        $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
        echo($hashedPassword."<br><br>");
        
        $outputHashed='$2y$10$t9FyIX7mFco6EUBk05QehOcXbcniKCW0n9pru3t3K5o29Hoo1C4yy';
        if(password_verify($password,$outputHashed)){
            echo("Hey");
        }
    ?>
</body>
</html>