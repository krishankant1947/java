<?php
define("host","localhost");
define("username","root");
define("password","Root");
define("dbname","collageform");

$dsn = sprintf("mysql:hostname=%s;dbname=%s", host, dbname);
$pdo= new PDO($dsn, username,password);
?>