<?php
//Connexion avec la base de donné
// try {
//     $conn = new PDO('mysql:host=localhost;dbname=netflix', "stelian", "12345", array(
//         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
//     ));
// } catch (PDOException $erreur) {
//     echo 'Erreur de connexion : ' . $erreur->getMessage();
// }

//avec concatenation
define('HOST', 'localhost');
$dbName = 'netflix';
$userDbName = 'stelian';
$userDbPassword = '12345';
try {
    $conn = new PDO('mysql:host=' . HOST . ';dbname=' . $dbName,  $userDbName, $userDbPassword, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));
} catch (PDOException $erreur) {
    echo 'Erreur de connexion: ' . $erreur->getMessage();
}
