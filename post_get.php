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
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" >
    <div class="row">
        <div class="col-4 offset-4">
            <div class="row my-2">
                <div class="col-12">
                <img src="download (1).jfif" class="text-center">  
                </div>
            </div>
1
            <div class="alert">
                <?php
                if( empty($_GET['emailid']) ){
                    echo '<div class="alert alert-danger">Email is missing it is required</div>';
                }elseif( filter_var($_GET['emailid'], FILTER_VALIDATE_EMAIL) == false ){
                    echo '<div class="alert alert-danger">Email is invalid</div>';
                }

                if (empty($_GET['idpassword'])){
                    echo '<div class="alert info"> Password are compalsore</div>';
                }
                
                ?>
            </div>
            <div class="row my-2">
                <div class="col-12">
                <div class="form-floating">
                    
             
                                <input  type="text"  name="emailid"  class=" form-control"
                                value= "<?php  echo isset($_GET["emailid"])  ?$_GET['emailid']:"";?>" 
                                id="setEmail" placeholder="name@example.com">
                                <label for="setEmail">Email address <span class="text-danger">*</span></label>
                </div>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12">
              <div class=" form-floating">
             
                <input  type="password" name="idpassword" class="form-control"
                value= "<?php  echo isset($_GET["idpassword"])  ?$_GET['idpassword']:"Empty";?>" 
                 id="idPassword" placeholder="Password">
                  <label for="idPassword">idPassword</label>
              </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <div class="form-floating">
                <button type="submit" class=" form-control" >Login </button>
                </div>
                </div>
            </div>
        </div><!--offset-->
    </div><!--row-->
    <?php
    if(Empty($_GET["emailid"])){     
        echo "Thankas";
    }
    else {
        printf("this is my email %s", $_GET['emailid']);
    }
  //  print_r($_GET);


if(empty($_GET["idpassword"])){
    echo "lon";
}
else {
    printf("check %s ", htmlspecialchars_decode($_GET['idpassword']));
}
//print_r($_GET);
    ?>
</form>


</body>
</html>

  
                        
