<?php
 require "config 2.php";
    $array=array();
// var_dump($_SERVER['REQUEST_METHOD'],'post');
    if($_SERVER['REQUEST_METHOD']=='POST'){
       
        if(empty($_POST['title'])){
            $array[]=("enter your data");
        }
        if(empty($array)){
            $sql="insert into dist(name) value(?)";
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
              <input type="text" name="title" class="form-control" id="state_of_domicle"  >
            </div>
        
            <div class="col-3">
            <button  type="submit"  class="form-control" onclick="submitbutton (event, this)" >Next</button>
            </div>   
           </div>             
    </form>
    <table>
    <?php
    
    $sql="select * from dist";
    $data= $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
   // $dist_rows
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    for($a=0; $a<count($rows); $a++){
        echo <<< PDO
        <tr>
            <td>{$rows[$a]['name']}</td>
        </tr>
        PDO;
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
    </script>
</body>
</html>