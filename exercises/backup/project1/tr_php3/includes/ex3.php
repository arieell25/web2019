<!DOCTYPE html>
<html>

<head>
    <title>ARIEL TR.PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="wrapper">
    <table class="table table-dark">
        <thead>
            <tr>
                <?php
                $days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday'];
                foreach ($days as $day){
                    echo '<th scope="col">' . $day . '<th>';
        
                }
                ?>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>vvnf</td>
                    <td>@fjfdji</td>
            </tr>
            </tbody>
            </table>
            </div>
            </body>
