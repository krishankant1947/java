<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
// session_regenerate_id();
// session_destroy();;
echo '<pre>';
// $_SESSION['isloggedIn'] = true;
// $_SESSION['name'] = "Vipan";
setcookie("name", "Vian");

print_r($_COOKIE);
print_r($_SESSION);
echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body >
    <?php if(!empty($_SESSION['isloggedIn']) && $_SESSION['isloggedIn']){
        echo "Hi, ".$_SESSION['name'];
        echo '<a href="logout.php"> Logout </a>';
    } else {
        die("Please login again");
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card mt-3">
                    <div class="card-body">
                <h1 class="text-center">School</h1>
                <div class="row ">
                    <div class="col-6">
                        <label for="first_name">First Name:</label>
                        <input type="text" name="first_name"  id="first_name" 
                        value="<?php echo isset($_POST['first_name'])?$_POST['first_name']:"";?>" 
                        class="form-control" placeholder="First Name"/>
                    </div>
                    <div class="col-6">
                        <label for="Last_name">Last Name:</label>
                        <input type="text" name="last_name" class="form-control" 
                        value="<?php echo isset($_POST['last_name'])? $_POST['last_name']:""?>"
                        id="last_name" placeholder="last Name"/>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-6">
                        <label for="subject">Subject</label>
                    <input type="text" name="Subject_name" id="subject"
                       value="<?php echo isset($_POST['Subject_name'])? $_POST['Subject_name']:""?>"
                    class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="Language">language</label>
                        <select name="Languages"  class="form-control" id="Language">
                            <option value="">English</option>
                            <option value="">Hindi</option>
                            <option value="">Punjabi</option>
                            <option value="">Urdu</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <button type="submit" class="btn btn-outline-success" class="form-control">Submit</button>
                    </div>
                </div>
                </div><!--card body-->
                </div><!--card -->
            </div><!--col & offset-->
        </div><!--Row-->
    </form>
     <?php
    //    print_r($_POST);
    if(empty($_POST['first_name'])){
        echo "Please submit your details";
    } else {
        printf("my name  is %s %s %s", $_POST['first_name'] ,$_POST['last_name'], $_POST['Subject_name'] );
    }
    
?>

<?php
require "config 2.php";
print_r($_POST);    
$sql="insert into test (first_name , last_name, Subject_name) values(:first_name, :last_name, :Subject_name)";
$stmt= $pdo->prepare($sql);
$stmt->execute([
    "first_name"=>$_POST['first_name'],
    "last_name"=>$_POST['last_name'],
    "Subject_name"=>$_POST['Subject_name']
]);



?>
</body>
</html>