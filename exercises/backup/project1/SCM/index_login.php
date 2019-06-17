<?php
    include 'db.php';
    include "config.php";

    session_start();
    if(!empty($_POST["loginMail"])) { 
        $query  = "SELECT * FROM tb_users_210 WHERE email='" 
        . $_POST["loginMail"] 
        . "' and password = '"
        . $_POST["loginPass"]
        ."'";
        
        $result = mysqli_query($connection , $query);
        $row    = mysqli_fetch_array($result);
        
        if(is_array($row)) {
            $_SESSION["user_id"] = $row['user_id'];
            header('Location: ' . URL . 'posts.php');
        } else {
            $message = "Invalid Username or Password!";
        }
    }
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SCM_LOGIN</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="includes/style.css">

        <div id="wrapperLogin">
        <h1>LOGIN</h1><br>
            <form action="get_params_login.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label><input type="email" value="" id="userEmail name="userEmail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">Password:</label><input type="password" value="" id="password" name="password" class="form-control">
                </div>
                <div class="error"><? echo $errorMsg ?></div>
                <input type="submit" vlaue="LOGIN" class="btn btn-primary">
                </div>
            </form>
    </head>
    <body>

    </body>
</html>

