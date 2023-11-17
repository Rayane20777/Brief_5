<?php

include 'config.php';


$transactionsInfo = "SELECT * FROM transactions";
$data = $conn->query($transactionsInfo);


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

    <h1>List of transactions</h1>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>montant</th>
            <th>types</th>
            <th>id_compte</th>
        </tr>
        </thead>
        <tbody>   
        <?php
            foreach ($data as $transactions) {
                echo '<tr>';
                echo '<td>' . $transactions['id'] . '</td>';
                echo '<td>' . $transactions['montant'] . '</td>';
                echo '<td>' . $transactions['types'] . '</td>';
                echo '<td>' . $transactions['id_compte'] . '</td>';
                echo '<td>';
                echo "<a href=localhost/Brief_5/compte.php>Compte</a>";
                echo '</td>';
                echo '</tr>';
            }
            ?>      
        </tbody>
    </table>
</body>
</html>