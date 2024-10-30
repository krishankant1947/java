<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="row">
            <div class="col-12">
                <label for="state_of_domicle">State</label>
                <input type="text" name="name" id="state_of_domicle"  >
            </div>
        </div>
        
                     <button  type="submit" >Next</button>
                 
    </form>
    <?php
    $array=array();
    require "config 2.php";
    $sql="insert into dist(name)value(:name)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([
        "name"=>$_POST['name']
    ]);
    ?>
</body>
</html>