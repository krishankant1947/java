<?php
require "config 2.php";
$array=array();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sql= "insert into state(name) value(?)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$_POST['state']]);
    if(empty($_POST['state'])){
        echo "data empty";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
     integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
     integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <form action="" method="post">
        <div class="row">
            <div class="col-4 offset-4" >
                <div class="row">
                    <div class="col-2">
                        <label for="stateid">State</label>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" id="stateid" name="state">
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary" onclick="trackevevnt(event,this)">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        function trackevevnt(){
            $('#STATE').remove();
            data=$('#stateid').val();
            if(data.length ==0){
                $('form').prepend("<div class=\"alert alert-danger\" id=\"STATE\">DATA EMPTY</div>");
                event.preventDefault();
            }
        }
    </script>
</body>
</html>