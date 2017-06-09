<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "ProjetoRestaurante";

$con = new PDO("mysql:host=$host;dbname=$database", $user, $pass);

session_start();
