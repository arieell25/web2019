<?php
    include 'db.php';
    include "config.php";
    session_start();
    if(!empty($_POST["loginMail"])) { 
        $query  = "SELECT * FROM tb_users_210 WHERE email = '" 
        . $_POST["loginMail"] 
        . "' and password = '"
        . $_POST["password"]
        ."'";
        
        $result = mysqli_query($connection , $query);
        $row    = mysqli_fetch_array($result);
        
        if(is_array($row)) {
            $_SESSION["user_id"] = $row['user_id'];
            $_SESSION["user_name"] = $row['name'];
            header('Location: ' . URL . 'index.php');
        } else {
            $message = "Invalid Username or Password!";

        }
    }
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport">
        <title>SCM_LOGIN</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="includes/style.css">
    </head>
    <body>
        <div class="wrapperLogin">
        <h1>Login</h1><br>
            <form action="#" method="post" id="frm">
                <div class="form-group">
                    <label for="loginMail">Email:</label><input type="email" id="loginMail" name="loginMail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label><input type="password" value="" id="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <div class="error"><?php if(isset($message)) {echo $message; } ?></div>
            </form>
        </div>
    </body>
</html>
<?php
mysqli_close($connection);
?>

