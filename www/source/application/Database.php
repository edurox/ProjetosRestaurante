<?php

class Database {
    public $con;

    public function connect() {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "ProjetoRestaurante";

        session_start();

        return new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    }

}
