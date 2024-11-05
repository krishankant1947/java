<?php
define("host","localhost");
define("username","root");
define("password","");
define("dbname","state");

$dsn = sprintf("mysql:hostname=%s;dbname=%s", host, dbname);
$pdo= new PDO($dsn, username,password);
?>