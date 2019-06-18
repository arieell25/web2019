<?php
    include 'db.php';

    $query = "SELECT * FROM `tb_users_210` WHERE email = '" . $_GET['userEmail'] . "' ORDER BY NAME;";

    $model = mysqli_query($connection, $query);
    if (!$model) {
        die("DB query Failed.");
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
	    <div id="wrapper">
            <?php
            $row = mysqli_fetch_assoc($model);
            echo "<h3>USER - " . $row["name"] . "</h3>"
                . "<p>Registered on: " . $row["register_date"] 
                . "</p>";
            mysqli_free_result($model);
            ?>
    </div>
</body>
</html>
<?php
mysqli_close($connection);
?>

