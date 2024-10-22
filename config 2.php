<?php
define("host","localhost");
define("username","root");
define("password","root");
define("dbname","exam");

$dsn = sprintf("mysql:hostname=%s;dbname=%s", host, dbname);
$pdo= new PDO($dsn, username,password);
