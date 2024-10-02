<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
    <div>
        <h1>hello</h1>
    </div>
    <div>
    <label for="">First Name</label></div>
    <input type="text" name="first_name" value="<?php echo isset($_POST['first_name'])?$_POST['first_name']:"";?>" >
        <div>
        <label for="">LastName</label></div>
        <input type="text" name="last_name" value="<?php echo isset($_POST['last_name'])?$_POST['last_name']:"";?>">
        <div><input type="submit" value="Submit"/></div>





    </form>
</body>
</html>