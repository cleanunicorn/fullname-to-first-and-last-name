<?php

include "vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$db = new PDO('mysql:host=localhost;dbname='. $_ENV['DB_DATABASE'] .';charset=utf8', $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);


