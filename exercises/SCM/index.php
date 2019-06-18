<?php
    include 'db.php';
    include "config.php";

    session_start();
    
    if(!isset($_SESSION["user_id"]) && !isset($_SESSION["user_name"]))
        header('Location: ' . URL . 'index_login.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>SCM</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/style.css">
</head>

<body id="homeLayout">
    <div id="wrapper">
        <header>
            <section class="loginLine">
                <?php
                    if(isset($_SESSION["user_id"])){
                        echo $_SESSION["user_name"];
                        echo "<a href='index_login.php'>Exit</a>";
                    } else {
                        echo "<a href='index_login.php'>Login</a>";   
                    }
                ?>


                <a href="#">Support</a>
            </section>
            <a class="logo1" href="#"></a>
            <a class="logo2" href="#"></a>
        </header>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="facilitysLayout.html">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Subscribers</a>
                </li>
            </ul>
        </nav>
        <ul class="breadcrumb">
            <li class="currentPage">Home</li>
        </ul>
        <main>
            <section class="menuArea">
                <a href="formLayout.html">
                    <div class="actionCircle">Add a facility</div>
                </a>
                <a href="#">
                    <div class="actionCircle">Add subscriber</div>
                </a>
                <a href="#">
                    <div class="actionCircle">Add training</div>
                </a>
            </section>
        </main>

        <footer>
            <h3>Messages:</h3>
            <p>Boxing training is canceled today</p>
        </footer>
    </div>
</body>

</html>