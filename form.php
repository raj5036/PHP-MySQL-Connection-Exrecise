<?php
    if(isset($_POST["curSubmit"])){
       function validateFormData($arg){
            $a=trim(stripcslashes(htmlspecialchars($arg)));
            return $a;
       }
       if(empty($_POST["curName"])){
            $nameError="Please enter a valid name";
       }
       else {
           $name=validateFormData($_POST["curName"]);
       }
       if(empty($_POST["curEmail"])){
           $emailError="Please enter a valid email";
       }
       else {
           $email=validateFormData($_POST["curEmail"]);
       }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4 class="lead">Form Submission Using $_GET</h4>
        <form method="get" action="form_get.php">
            <div class="form-group">
                <small class='text-danger'>*Required fields</small>
                <input type="text" class="form-control"  placeholder="Name" name="name">
                <small class='text-danger'>*Required fields</small>
                <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <button type="submit" class="btn btn-success" name="get_submit">Submit</button>
        </form>
        <hr>
        <h4 class="lead">Form Submission Using $_POST</h4>
        <form method="post" action="form_post.php">
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="Name" name="post_name">
                <input type="email" class="form-control" placeholder="Email" name="post_email">
            </div>
            <button type="submit" class="btn btn-success" name="curSubmit">Submit</button>
        </form>
        <hr>
        <h4 class="lead">Submitted To Current Page</h4>
        <form method="post" action="<?php echo(htmlspecialchars( $_SERVER["PHP_SELF"] ) );?>">
            <div class="form-group">
                <small><?php echo( "<p class='text-danger'>$nameError</p>" ); ?></small>
                <input type="text" class="form-control"  placeholder="Name" name="curName">
                <small><?php echo( "<p class='text-danger'>$emailError</p>" ); ?></small>
                <input type="email" class="form-control" placeholder="Email" name="curEmail">
            </div>
            <button type="submit" class="btn btn-success" name="curSubmit">Submit</button>
        </form>
        <?php
            if(isset($_POST["curSubmit"])){
                echo("<h3>Your name is $name and Your email is $email</h3>");
            }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>