<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="text/javascript">
        function element(){
            
            if(userpasswordentry.length != 0){
                    if(userpasswordentry== userreentry){
                        message.textContent ="password match";
                    }
                    else{
                        message.textContent = "password not match";
                    }
                }
        }
    </script>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="get">
        <div class="row">
            <div class="col-4 offset-4">
            <div class="row my-1">
                    <div class="col-12">
                           <img src="ghk.jfif" >
                        </div>


                        <?php
                if( empty($_GET['userpasswordentry']) ){
                    echo '<div class="alert alert-danger">password are not match</div>';
                }


                ?>


                <div class="row my-1">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="userentry"
                            value= "<?php  echo isset($_GET["userentry"])  ?$_GET['userentry']:"control";?>" 
                            id="Usernamelogin">
                            <label for="Usernamelogin">Username:</label>
                        </div>
                     </div>
                </div>
                <div class="row my-1">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text"  class="form-control" name="useremailentry"
                            value= "<?php  echo isset($_GET["useremailentry"])  ?$_GET['useremailentry']:"blank";?>" 
                            id="Useremaillogin">
                            <label for="Useremaillogin">Email:</label>
                        </div>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text"  class="form-control" name="userpasswordentry" id="Userpassword">
                            <label for="Userpassword">Password:</label>
                        </div>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-12">
                       <div class="form-floating">
                            <input type="text"  class="form-control" name="userreentry" id="Userconfirmpass">
                            <label for="Userconfirmpass">Confirm Password:</label>
                         </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-6">
                    <div class="form-floating" >
                <button type="submit" class="btn btn-danger" >login </button>
                </div>
                </div>
            </div>
            </div><!--offset-->
        </div><!--row-->

        <?php
    if(empty($_GET["userentry"])){     
        echo "enter user name";
    }
    else {
        printf("correct username %s ?", $_GET['userentry']);
    }
  //  print_r($_GET);


if(empty($_GET["useremailentry"])){
    echo "sorry your email are not found";
}
else {
    printf("Are you sure your email %s ", htmlspecialchars_decode($_GET['useremailentry']));
}
//print_r($_GET);
    ?>
    </form>
</body>
</html>