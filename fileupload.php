<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<?php
    // include("functions.php");
    // include("functions.php");
    require("functions.php");
    include_once("functions.php");
    require_once("functions.php");
  //  dd($_POST);
    dd($_FILES);

    if(!empty($_FILES['dp']['tmp_name'])){
        
        if(strstr($_FILES['dp']['full_path'], '.jpg')){
        // if($_FILES['dp']['type'] == 'image/jpeg' || $_FILES['dp']['type'] == 'image/jpg' || $_FILES['dp']['type'] == 'image/png'){

            if(!is_dir('uplods')) {
                mkdir("uplods");
            }
            $dirname = date("Y-m-d-H-i-s");
            mkdir("uplods/".$dirname);
            $file_name = 'uplods/'.$dirname.'/'.$_FILES['dp']['name'];
        
            if(move_uploaded_file($_FILES['dp']['tmp_name'], $file_name)){
                echo "uploaded successfully at ".$file_name;
            }
        } else {
            echo "Invalid file type";
        }

    }
?>
<body>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6 offset-2">
                <label for="full_name">Full Name : </label>
                <input type="text" id="full_name" name="fullname">
            </div>
            <div class="col-6 offset-2">
                <label for="profile_pic">Profile Pic</label>
                <input type="file" name="dp" id="profile_pic"/>
            </div>
        </div>
    </form>
</body>
</html>