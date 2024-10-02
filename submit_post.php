<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

// $_POST
// $_POST
// $_SERVER
// $_COOKIE
// $GLOBALS
$_POST['first_name'] = trim( $_POST['first_name']??'');
?>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div><input type="text" name="first_name" value="<?php echo isset($_POST['first_name'])?$_POST['first_name']:"Empty";?>" ><label for="">First Name</label></div>
        <div><input type="text" name="last_name" value="<?php echo isset($_POST['last_name'])?$_POST['last_name']:"";?>"><label for="">LastName</label></div>
        <div><input type="submit" value="Submit"/></div>

    </form>
<pre>
    <?php
    if(empty($_POST['first_name'])){
        echo "Please submit your details";
    } else {
        printf("Welcome %s %s", $_POST['first_name'], $_POST['last_name']);
    }
    // print_r($_POST);
    // print_r($_SERVER); // hold server values

?>
</body>
</html>