<?php
//Fichier des paramêtres de connection à la base de données SQL

$host = "localhost:8888";
$db = "todolist";
$username = "root";
$password = "root";

$url = "mysql:host=" . $host . ";dbname=" . $db;
try {
    $conn = new PDO($url, $username, $password);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
