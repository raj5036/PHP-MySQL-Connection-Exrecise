<?php
    include('connection.php');
    if(isset($_POST["Submit"])){
        function validateFormData($formData){
            $formData = trim( stripslashes( htmlspecialchars($formData) ) );
            return $formData;
        }
        function generateError($arg){
            if($arg=""){
                $error="Please Fill it up";
                return $error;
            }else{
                $arg=validateFormData($arg);
                return $arg;
            }
        }
        $username=generateError($_POST["userName"]);
        $email=generateError($_POST["email"]);
        $password=generateError($_POST["password"]);
    if(!$error){
        $query="INSERT INTO users(id,username,password,email,signup_date,biography)
        VALUES(NULL,'$username','$password','$email',CURRENT_TIMESTAMP,NULL)";

        if (mysqli_query($conn,$query)) {
            echo("New Record in Database!");
        }
        else
        {
            echo("Entry Failed".$query.mysqli_error());
        }
    }
}

    
   
?>

<body>
    <h2>LogIn</h2>
    <form action="<?php echo(htmlspecialchars($_SERVER["PHP_SELF"])); ?>" method="post">
        <div class="form-group">
            <small><?php echo( "<p class='text-danger'>$error</p>" ); ?></small>
            <input type="text" class="form-control"  placeholder="Username" name="userName">
            <small><?php echo( "<p class='text-danger'>$error</p>" ); ?></small>
            <input type="email" class="form-control" placeholder="Email" name="email">
            <small><?php echo( "<p class='text-danger'>$error</p>" ); ?></small>
            <input type="password" class="form-control" placeholder="password" name="password">
        </div>
        <button type="submit" class="btn btn-success" name="Submit">LogIn</button>
    </form>
</body>