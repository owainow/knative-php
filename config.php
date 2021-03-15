<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', $_ENV["MYSQL_IP_ADDRESS"]);
define('DB_USERNAME', $_ENV["MYSQL_USER"]);
define('DB_PASSWORD', $_ENV["MYSQL_PASSWORD"]);
define('DB_NAME', $_ENV["MYSQL_DATABASE"]);
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>