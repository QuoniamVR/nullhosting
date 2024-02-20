<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('127.0.0.1', 'localhost');
define('pbfutbsd', 'root');
define('mHVqJkF8vS5wcE', '');
define('pbfutbsd_hosting', 'demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
