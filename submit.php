<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

// $_GET
// $_POST
// $_SERVER
// $_COOKIE
// $GLOBALS
$_GET['first_name'] = trim( $_GET['first_name']);
?>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        <div><input type="text" name="first_name" value="<?php echo isset($_GET['first_name'])?$_GET['first_name']:"Empty";?>" ><label for="">First Name</label></div>
        <div><input type="text" name="last_name" value="<?php echo isset($_GET['last_name'])?$_GET['last_name']:"";?>"><label for="">LastName</label></div>
        <div><input type="submit" value="Submit"/></div>

    </form>
<pre>
    <?php
    if(empty($_GET['first_name'])){
        echo "Please submit your details";
    } else {
        printf("Welcome %s %s", $_GET['first_name'], $_GET['last_name']);
    }
    // print_r($_GET);
    // print_r($_SERVER); // hold server values

?>
</body>
</html>