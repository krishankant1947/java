<?php
require "configtodo.php";
$array=array();
$edit_data=[];
if(!empty($_GET['action'])){
    if($_GET['action']=='edit'){
        $id=$_GET['id'];
        $sql="select * from todo where id=?";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$id]);
        $edit_data=$stmt->fetch(PDO::FETCH_ASSOC);
    }
    else {
        $sql="delete from todo where id=?";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_GET['id']]);
        header("location:indextodo.php");
        die;
    }


}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        echo "input are empty";
    }
    if(empty($array)){
        if(empty($_GET['id'])== false){
            $sql="update todo set name=? where id=?";
        }
        else{
            $sql="insert into todo (name) value(?)";
            $stmt=$pdo->prepare($sql);
            $stmt->execute([$_POST['managetodo']]);
        }
        header("location:indextodo.php");
        die; 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="" method="post" >
        <div class="row">
            <h2 class="text-center">Todo</h2>
        </div>
        <div class="row">
            <div class="col-4 offset-4 border">
            <div class="row">
            <div class="col-12">
                <label for="todoname">todo</label>
                <input type="text" name="managetodo" id="todoname" class="form-control">
            </div>
        </div>
                <button>submit</button>
        <table border=1px class="table table-striped table-hover">
            <?php
    
                $sql="select * from todo";
                $stmt=$pdo->prepare($sql);
                $stmt->execute();
                $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row){
                    echo<<<CT
                    <tr>
                    <td>{$row['name']}</td>
                    <td class="text-end"><a href="indextodo.php?action=edit&id={$row['id']}"></a><i class="fa-solid fa-pen"></i>
                    <a href=""></a><i class="fa-solid fa-trash"></i></td>

                    CT;
                }
            ?>
        </table>
        </div>
        </div>
        
    </form>
</body>
</html>