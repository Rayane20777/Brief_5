<?php

include 'config.php';


$clientInfo = "SELECT * FROM clients";
$data = $conn->query($clientInfo);
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
            <th>nom</th>
            <th>prenon</th>
            <th>date_naissance</th>
            <th>nationalite</th>
            <th>genre</th>
        </tr>
        </thead>
        <tbody>   
        <?php
            foreach ($data as $client) {
                echo '<tr>';
                echo '<td>' . $client['id'] . '</td>';
                echo '<td>' . $client['nom'] . '</td>';
                echo '<td>' . $client['prenom'] . '</td>';
                echo '<td>' . $client['date_naissance'] . '</td>';
                echo '<td>' . $client['nationalite'] . '</td>';
                echo '<td>' . $client['genre'] . '</td>';
                echo '<td>';
                echo '<a href="#">Compte</a>';
                echo '</td>';
                echo '</tr>';
            }
            ?>      
        </tbody>
    </table>
</body>
</html>