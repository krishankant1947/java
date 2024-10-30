<?php
 require "config 2.php";
    $array=array();
// var_dump($_SERVER['REQUEST_METHOD'],'post');
    if($_SERVER['REQUEST_METHOD']=='POST'){
       
        if(empty($_POST['title'])){
            $array[]=("enter your data");
        }
        if(empty($array)){
            $sql="insert into dist(name)value(?)";
            $stmt=$pdo->prepare($sql);
            $stmt->execute([$_POST['title']]);
            echo'data inserted';
       };
       
     
    }
    
    //  var_dump($array);
    // print_r($array);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <?php
        if(!empty($array)){
        echo '<div class="alert alert-danger">';
        echo 'enter your name';
       echo '</div>'; 
    }
        ?>
        <div class="row">
            <div class="col-12">
                <label for="state_of_domicle">State</label>
                <input type="text" name="title" id="state_of_domicle"  >
            </div>
        </div>
        
                     <button  type="submit" >Next</button>
                 
    </form>
    
</body>
</html>