<?php
 require "config 2.php";
    $array=array();
    $edit_data = [];

    if(!empty($_GET['action']) && $_GET['action']){
        
        echo 'heloo';
        $id=$_GET['id'];
        $sql="select * from dist where id=?";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$id]);
        $edit_data= $stmt->fetch(PDO::FETCH_ASSOC);
    }
// var_dump($_SERVER['REQUEST_METHOD'],'post');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        echo '<pre>';
        print_r($_POST);
        print_r($_GET);
        die;
        if(empty($_POST['title'])){
            $array[]=("enter your data");
        }
        if(empty($array)){

            if(empty(id))
                $sql="insert into dist(name)value(?)";
            else{
              $sql="update dist set name='Krishan kant';
            }
                
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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
     integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <form action="" method="post">
       
       <div class="row ">
        <div class="col-4 offset-4 border">
             <?php
        if(!empty($array)){
        echo '<div class="alert alert-danger">';
        echo 'enter your name';
       echo '</div>'; 
    }
        ?>
        <div class="row my-2">
            <div class="col-2 my-1">
                <label for="state_of_domicle">State</label>
            </div>
            <div class="col-7">
              <input type="text" name="title" class="form-control" id="state_of_domicle" value="<?php echo empty($edit_data)?"": $edit_data['name']?>"  >
            </div>
        
            <div class="col-3">
            <button  type="submit"  class="form-control" onclick="submitbutton (event, this)" >Next</button>
            </div>   
           </div>  
                    
    </form><table border="1" width="100%" class="table table-striped table-hover">
    <?php
   
    $sql="select * from dist";
    $stmt=$pdo->prepare($sql);
    
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($row);
    foreach($rows as $row){
        echo <<<POO
        
        <tr>
            <td>{$row['name']}</td>
            <td><a href="?action=edit&id={$row['id']}"><i class="fa-solid fa-pen-to-square"></i></a> 
            <a href="javascript://"  onclick="delele(event,this)" data-id="{$row['id']}"><i class="fa-solid fa-trash-can"></i></a></td>
        </tr>
        
        POO;
    }
    ?></table>
        </div>
       </div>
    <script type="text/javascript">
    
     function submitbutton(event,object){
      $('#DOMICLE').remove(); 
      
        mag=$('#state_of_domicle').val();
          if(mag.length ==0){
            $('form').prepend("<div class=\"alert alert-danger\" id=\"DOMICLE\">migging </div>"); 
             event.preventDefault();
            // alert("migging");
          }
           
          
     }
     function edit(event,object){
        alert("Check");
     }
     function delele(event,object){
        let id = object.getAttribute('data-id')
        window.location.replace('domicle.php?action=delete&id='+id)
     }
    </script>
    
</body>
</html>