<?php 
    include 'db.php';
    include "config.php";

    session_start();

     if(!isset($_SESSION["user_id"]))
         header('Location: ' . URL . 'pro');
?>
<?php
    $query  = "SELECT u.name, u.email, u.address, u.phone
    FROM `tb_users_210` AS u;

    $model = mysqli_query($connection, $query);
    if(!$model) {
        die("DB query failed.");
    }
?>
<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">  
	    <title>SCM</title>
	    <link href="includes/style.css" rel="stylesheet">
	</head>
	<body>
	    <div id="wrapper">
<?php 
	
            echo "<ul>";
	        while($row = mysqli_fetch_assoc($model)) {
	            echo "<li><h3>USER - <a href='user.php?userEmail=" . $row["email"] . "'>"
                . $row["name"] 
                . "</a><br>Personal inormation - </h3><p>"
                . $row["adress"]  . "<br>"
                . "<a href='" . $row["link"] . "' target='_blank'>" 
                . $row["phone"]
                . "</a></p></li>";
	        }
            echo "</ul>";

			mysqli_free_result($model);
            ?>
	    </div>
	</body>
</html>
<?php
mysqli_close($connection);
?>