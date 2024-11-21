<?php
require "config 2.php";?>
<?php
$array=array();
$edit_data=[];
if(!empty($_GET['action'])){
    if($_GET['action']=='edit'){
        echo 'edksm';
        $id=$_GET['id'];
        $sql="select * from city where id=?";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$id]);
        $edit_data=$stmt->fetch(PDO::FETCH_ASSOC);
        // var_dump($edit_data);
    }
    else {
        $sql="delete from city where id=?";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_GET['id']]);
        header("location:city.php");
        exit;
    }


}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['index'])){
        echo "input are empty";
    }
    if(empty($array)){
        if(empty($_GET['id'])==false){
            $sql="update city set name= ? where id=?";
        }
        else{
            $sql="insert into city (id,name) value(?,?)";
        }
            $stmt=$pdo->prepare($sql);
            $stmt->execute(
                [
                    $_POST['index']
                    // empty($_GET['id']) ?'null'
                    // :($_GET['id'])
                    
                    ]

            );
            header("location:city.php");
            exit;
    }
   
    
   } 
   





    //  var_dump($_POST);   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="" method="post">
       
        <div class="row">
            <div class="col-4 offset-4">  
                          
            <div class="row">
            <div class="col-2">
                <label for="city">City</label>
            </div>
            <div class="col-7">
                  <input type="text" name="index" value="<?php echo empty($edit_data)?"":$edit_data['name']?>" class="form-control" id="city">
            </div>
            <div class="col-3">
                <button class="btn btn-primary" type="submit"  onclick="eventbinding(event, this)">submit</button>
            </div>
                </div>
                <table border="1px"  width=100% class="table table-striped table-hover">
<?php
   
    $sql="select * from city";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row){
        echo<<<CT
        <tr>
        <td>{$row['name']}</td>
        <td><a href="city.php?action=edit&id={$row['id']}"><i class='fa-sharp-duotone fa-solid fa-pen-to-square'></i></a>
        <a href=""><i class="fa-solid fa-trash-arrow-up"></i></a></td>
        </tr>

    CT;
    }
    
    //  echo "<pre>";
    // var_dump($rows);
    // echo "</pre>";
?>
</table>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        function eventbinding(){
            $('#INDEX').remove();
            entry=$('#city').val();
            if(entry.length ==0){
            $('form').prepend("<div class=\"alert alert-danger\" id=\"INDEX\">migging </div>"); 
             event.preventDefault();
        }
    }
    </script>
    
</body>
</html>