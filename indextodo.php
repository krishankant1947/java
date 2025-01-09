<?php
require "configtodo.php";
$array=array();
$sql="select * from todo";
$stmt = $pdo->prepare($sql);
$stmt->execute();
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
    <form action="post" >
        <div class="row">
            <h2 class="text-center">Todo</h2>
        </div>
        <div class="row">
            <div class="col-4 offset-4 border">
            <div class="row">
            <div class="col-12">
                <label for="">todo</label>
                <input type="text" name="" id="" class="form-control">
            </div>
        </div>
        <button>submit</button>
            </div>
        </div>
    </form>
</body>
</html>