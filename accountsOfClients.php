<?php

include 'config.php';

$clientId = $_GET['id'];

$clientAccounts = "SELECT * FROM comptes WHERE id_client = $clientId";
$data = $conn->query($clientAccounts);

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

    <h1>Accounts of client <?php echo $clientId ?></h1>
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
            foreach ($data as $compte) {
                echo '<tr>';
                echo '<td>' . $compte['id'] . '</td>';
                echo '<td>' . $compte['balance'] . '</td>';
                echo '<td>' . $compte['devise'] . '</td>';
                echo '<td>' . $compte['rib'] . '</td>';
                echo '<td>' . $compte['id_client'] . '</td>';
                echo '<td>';
            }
            ?>      
        </tbody>
    </table>
</body>
</html>
