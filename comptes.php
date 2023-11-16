<?php

include 'config.php';


$comptesInfo = "SELECT * FROM comptes WHERE id = 1";
$data = $conn->query($comptesInfo);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <h1>List of clients</h1>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>balance</th>
            <th>devise</th>
            <th>rib</th>
            <th>id_client</th>
        </tr>
        </thead>
        <tbody>   
        <?php
            foreach ($data as $comptes) {
                echo '<tr>';
                echo '<td>' . $comptes['id'] . '</td>';
                echo '<td>' . $comptes['balance'] . '</td>';
                echo '<td>' . $comptes['devise'] . '</td>';
                echo '<td>' . $comptes['rib'] . '</td>';
                echo '<td>' . $comptes['id_client'] . '</td>';
                echo '<td>';
                echo '<a href="#">Transaction</a>';
                echo '</td>';
                echo '</tr>';
            }
            ?>      
        </tbody>
    </table>
</body>
</html>