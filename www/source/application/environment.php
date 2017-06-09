<?php

$environment = "development";

switch($environment) {
    case "development":
        define("SITE_URL", "http://localhost:8080/");
        define("DB_HOST", "localhost");
        define("DB_NAME", "restaurante_universitario");
        define("DB_USER", "root");
        define("DB_PASS", "");
        break;

    case "production":
        define("SITE_URL", "http://ru.uffs.edu.br");
        define("DB_HOST", "localhost");
        define("DB_NAME", "restaurante_universitario");
        define("DB_USER", "root");
        define("DB_PASS", "");
        break;

    default:
        break;
}
