<?php
$host = "localhost";
$user = "root";
$pass = "root";
$database = "projeto";

$con = new PDO("mysql:host=$host;dbname=$database", $user, $pass);

session_start();
