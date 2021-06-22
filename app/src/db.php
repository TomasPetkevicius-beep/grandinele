<?php

error_reporting(E_ALL ^ E_WARNING); 

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "firma");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error) {
    echo "Atsiprasome./n";
    echo 'Klaida: '. $mysqli->connect_error.'/n';
    exit();
}

mysqli_query($mysqli, "INSERT INTO uzklausos (vardas, email, message) 
VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[message]')");
