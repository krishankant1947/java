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
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" class="text-center" novalidate>
    <div class="row">
        <div class="col-4 offset-4">
            <div class="row my-2">
                <div class="col-6">
                <img src="download (1).jfif" class="test-center" >
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12">

                                 <label for="setEmail">Email address</label>
                                <input  type="email"  name="emailid" 
                                value= "<?php  echo isset($_GET["emailid"])  ?$_GET['emailid']:"Empty";?>" 
                                id="setEmail" placeholder="name@example.com">        
                </div>
            </div>
            <div class="row my-2">
                <div class="col-12">
               <label for="idPassword">Password</label>
                <input  type="password" name="password"
                value= "<?php  echo isset($_GET["idpassword"])  ?$_GET['idpassword']:"Empty";?>" 
                 id="idPassword" placeholder="Password">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <button type="submit" >Login </button>
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


if(Empty($_GET["idpassword"])){
    echo "N/A";
}
else {
    printf("check")
}

    ?>
</form>


</body>
</html>

  
                        
