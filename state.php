<?php
require "config 2.php";
?>

<?php
$array=array();
$edit_data=[];
if(!empty($_GET['action'])){
    if($_GET['action']=='edit'){ 
        echo "";
        $id=$_GET['id'];
        $sql="select * from state where id=?";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$id]);
        $edit_data=$stmt->fetch(PDO::FETCH_ASSOC);
    }
    else{
        $sql="delete from state where id=?";
        $stmt=$pdo->prepare($sql);z
        $stmt->execute([$_GET['id']]);
    }
}
?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['title'])){
        $array[]=("enter your data");
    }
    if(empty($array)){
        if(empty($_GET['id']) === false){ 
            $sql="update state set name= ? where id=?";
        }
        else{
            $sql="insert into state(name,id) value(?,?)";
        }
    $stmt->execute([
        $_POST['title'],
        empty($_GET['id'])
        ?'null'
        :$_GET['id']
    ]);
    header("location:state.php");
    exit;
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
                        <input type="text" class="form-control" value="<?php echo empty($edit_data)?"": $edit_data['name']?>" id="stateid" name="state">
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-primary" onclick="trackevevnt(event,this)">Submit</button>
                    </div>
                </div>
                <table width=100%>
<?php
$sql="select * from state";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rows= $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row){
    echo<<<TR
    <tr>
        <td>{$row['name']}</td>
        <td><a href="state.php?action=edit&id={$row['id']}"><i class='fa-sharp-duotone fa-solid fa-pen-to-square'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="javascript://" onclick="delele(event,this)" data-id="{$row['id']}"><i class="fa-solid fa-trash-arrow-up"></i></a></td>
    </tr>
    TR;
}
// var_dump($rows);
?>
</table>
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
        function edit(event,object){
        alert("are you sure edit this file");
    }
        function delele(event,object){
           if(confirm("Are you sure want to delete?")){
           let id = object.getAttribute('data-id')
           window.location.replace('state.php?action=delete&id='+id)
       }
    }
    </script>
</body>
</html>
