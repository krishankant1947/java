<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
session_regenerate_id();
session_destroy();;
echo '<pre>';
$_SESSION['isloggedIn'] = true;
echo '</pre>';
// var_dump($_SESSION['isloggedIn']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.7.1.min.js"   
         integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form action="">
        <div class="container border border-black bg-danger-subtle ">
            <div class="container-fluid bg-dark-subtle">
                <div class="row">
                  <div class="col-4"></div>
                  <div class="col-4 text-center  ">
                     <img src="log.png" alt="" class="rounded-circle ">
                  </div>
                  <div class="col-4"></div>
                </div>
                <div class="row ">
                  <div class="col-4 text-center">
                     <p class="m-0">Application no</p>
                     <p class="m-0">2025-111652</p>
                  </div>
                  <div class="col-4">
                  </div>
                  <div class="col-4 text-center">
                     <Button class="" type="resetefcs">
                     <?php if(!empty($_SESSION['isloggedIn']) && $_SESSION['isloggedIn']){
                        echo '<a href="logout.php"> Logout </a>';
                        } else {
                            ("Please login again");
                        }
                    ?>
                     </Button>
                  </div>
                </div>
                <div>
                    <h1 class="text-center">Suki Phelps</h1>
                    <p class="text-center m-0"> MBBS - CHRISTIAN MEDICAL COLLEGE, LUDHIANA (ONLY FOR 2G) - 2G</p>
                    <p class="text-center ">BDS - CHURCH OF SOUTH INDIA - 2A</p>
                </div>
                <div>
                  <p class=" text-center">Magna velit illo lab</p>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>
</html>