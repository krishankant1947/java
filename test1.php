<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="text/javascript">
        function checkpassword(){
            //alert("abcd");
            console.log("userpasswordentry");
            if(userpasswordentry.length != 0){
                    if(userpasswordentry== userreentry){
                        message.textContent ="password match";
                    }
                    else{
                        message.textContent = "password not match";
                    }
                }
        }
         function trackevents(event){
            //event.preventDefault();
           // pass = document.getElementById("Userpassword").value;
            //alert("dsa")
           // console.log(event.type)
         }
    </script>
    

</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="get">
        <div class="row">
            <div class="col-4 offset-4">
            <div class="row my-1">
                    <div class="col-12">
                           <img src="ghk.jfif" class="text-center" >
                        </div>


                        <?php
                if( empty($_GET['userpasswordentry']) ){
                    echo '<div class="alert alert-danger">password are not match</div>';
                }


                ?>
                    <?php

                    if(empty($_GET['userentry'])){
                        echo '<div class="alert alert-danger">Missing your Username</div>';
                    }
                    if(empty($_GET['useremailentry'])){
                        echo '<div class="alert alert-danger">Missing your Email</div>';
                    }
                    if(empty($_GET['userpasswordentry'])){
                        echo '<div class="alert alert-danger">Missing your password</div>';
                    }
                    elseif (strlen($_GET['userpasswordentry'])<5) {
                        echo '<div class="alert alert-danger">PASSWORD SHOULD BE MORE THAN five</div>';
                    }
                  //  if($_GET['userpasswordentry']!== $_GET['userreentry']){
                     //   echo '<div class="alert alert-danger">PASSWORDmiss match</div>';
                    //}


                    ?>

                <div class="row my-1">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="userentry"
                            value= "<?php  echo isset($_GET["userentry"]) ?$_GET['userentry']:"";?>" 
                            id="Usernamelogin">
                            <label for="Usernamelogin">Username:</label>
                        </div>
                     </div>
                </div>
                <div class="row my-1">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text"  class="form-control" name="useremailentry"
                            value= "<?php  echo isset($_GET["useremailentry"])  ?$_GET['useremailentry']:"";?>" 
                            id="Useremaillogin">
                            <label for="Useremaillogin">Email:</label>
                        </div>
                    </div>
                </div>

                <div class="row my-1">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text"  class="form-control" name="userpasswordentry"
                            value= "<?php  echo isset($_GET["userpasswordentry"]) ?$_GET['userpasswordentry']:"";?>" 
                            id="Userpassword">
                            <label for="Userpassword">Password:</label>
                        </div>
                    </div>
                </div>
                <div class="row my-1">
                    <div class="col-12">
                       <div class="form-floating">
                            <input type="text"  class="form-control" name="userreentry"
                            id="Userconfirmpass">
                            <label for="Userconfirmpass">Confirm Password:</label>
                         </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-6">
                    <div class="form-floating" >
                <button type="submit" class="btn btn-danger" onblur="checkpassword(event,this)" 
                onclick="trackevents(event)"

                >login </button>
                </div>
                </div>
            </div>
            </div><!--offset-->
        </div><!--row-->

        <?php
    /*if(empty($_GET["userentry"])){     
        echo "enter user name";
    }
    else {
        printf("correct username %s ?", $_GET['userentry']);
    }
   

if(empty($_GET["useremailentry"])){
    echo "sorry your email are not found";
}
else {
    printf("Are you sure your email %s ", htmlspecialchars_decode($_GET['useremailentry']));
}
//print_r($_GET);*/
    ?>
    </form>

    <?php
$a = array('Krishan');
$b = array('kant');
$c = array_combine($a, $b);

print_r($c);

$array = array(1, "hello", 1, "world", "hello", 1,"Hello");
print_r(array_count_values($array));

$array1 = array("a" => "green", "red", "blue","pink", "red");
$array2 = array("b" => "green", "yellow","pink", "red");
$result = array_diff($array1, $array2);

print_r($result);

hello

hjbnj


?>
</body>
</html>
