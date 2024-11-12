<?php
var_dump( $edit_data );
 require "config 2.php";
    $array=array();
    $edit_data = [];

    if(!empty($_GET['action'])){
        
        if($_GET['action'] == 'edit'){
            echo 'heloo';
            $id=$_GET['id'];
            $sql="select * from dist where id=?";
            $stmt=$pdo->prepare($sql);
            $stmt->execute([$id]);
            $edit_data= $stmt->fetch(PDO::FETCH_ASSOC);

        } else {
            $sql="delete from dist where id=?";
            $stmt=$pdo->prepare($sql);
            $stmt->execute([$_GET['id']]);
            header("location:domiclelisting.php");
            exit;
        }
    }
// var_dump($_SERVER['REQUEST_METHOD'],'post');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['title'])){
            $array[]=("enter your data");
        }
        if(empty($array)){
            if(empty($_GET['id']) === false){ 
                $sql="update dist set name= ? where id=?";
            }
            else{
                $sql="insert into dist(name,id) value(?,?)";
            }

            // if(empty($_GET['id'])){
            //     $_GET['id'] = 'null';
            // }
            $stmt=$pdo->prepare($sql);
            $stmt->execute(
                [
                    $_POST['title'],
                    empty($_GET['id'])
                    ?'null'
                    :$_GET['id']
                ]
            );
            header("location:domiclelisting.php");
            exit;
            echo'data inserted';
       };
       
     
    }
    
    //  var_dump($array);
    // print_r($array);
    require "templates/header.php";

    ?>

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
        <a href="?"><input type="button" value="Clear"/></a>
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
                    
    </form>
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
        if(confirm("Are you sure want to delete?")){
            let id = object.getAttribute('data-id')
            window.location.replace('domiclelisting.php?action=delete&id='+id)
        }
     }
    </script>
    
</body>
</html>