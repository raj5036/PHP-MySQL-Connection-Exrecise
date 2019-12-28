<? define("TITLE","PHP Syntax"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo TITLE; ?></title>
</head>
<body>
    <?php
        $var="Raj";
        echo("Long Time No See"."<br>".$var." Hello there");
        
        define("GREETING", "Welcome to W3Schools.com!");
        echo "<br>".GREETING."<br>";
        $data=array(
                        "John Doe",
                        35,
                        "Male",
                        "Mexico"
                   );
        for ($i=0; $i <4 ; $i++) { 
                echo($data[$i]."<br>");
        }
    ?>
</body>
</html>