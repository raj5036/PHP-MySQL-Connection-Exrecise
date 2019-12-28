<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
</head>
<body>
    <h1>My SQLi Connction Checking</h1>
    <?php 
    include('connection.php');
    $query = "SELECT * FROM users";
    $result=mysqli_query($conn , $query);

    echo("<table class='table table-bordered'><tr><th>ID</th><th>UserName</th><th>E-Mail</th><th>Bio</th></tr>");

    if(!empty(mysqli_num_rows($result))){
        while ($row=mysqli_fetch_assoc($result)) {
            echo("<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td><td>".$row["biography"]."</td></tr>");
        }
        echo("</table>");
    }else {
        echo("You have no data.");
    }
    mysqli_close($conn);
?>
</body>