<?php
$pdo = new PDO('mysql:host=localhost;dbname=bankmanagement', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sqlCreateTableClient = 'CREATE TABLE IF NOT EXISTS clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    date_naissance DATE NOT NULL,
    nationalite VARCHAR(255) NOT NULL,
    genre VARCHAR(255) NOT NULL
)';

$sqlCreateTableComptes = 'CREATE TABLE IF NOT EXISTS comptes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    balance VARCHAR(255) NOT NULL,
    devise VARCHAR(255) NOT NULL,
    rib VARCHAR(255) NOT NULL,
    id_client VARCHAR(255) NOT NULL
)';


$sqlCreateTableTransactions = 'CREATE TABLE IF NOT EXISTS transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    montant VARCHAR(255) NOT NULL,
    types VARCHAR(255) NOT NULL
)';



// if ($pdo->exec($sqlCreateTableClient)) {
//     echo "Table 'clients' created successfully";
// } else {
//     echo "Error creating table 'clients': ";
// }
// if ($pdo->exec($sqlCreateTableComptes)) {
//     echo "Table 'comptes' created successfully";
// } else {
//     echo "Error creating table 'comptes': ";
// }

try {
    $pdo->exec($sqlCreateTableClient);
    $pdo->exec($sqlCreateTableComptes);
    $pdo->exec($sqlCreateTableTransactions);
    echo "Tables created successfully";
} catch (Exception $e) {
    echo "Error creating tables";
}






?>