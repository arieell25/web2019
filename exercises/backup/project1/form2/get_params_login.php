<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <section>
            Welcome
            <?php
                $un = $_GET["reg_un"];
                $pw = $_GET["reg_pass"];

                if($un == "ariel" && $pw == "123")
                    echo "<h2>Good morning user " . $un . "</h2>";
            else
                echo "<h2> Who are you? you can't get in</h2>"
            ?>
        </section>
    </body>
</html>


