<?php
$dsn = "";
// PDO // 15-15

// MySQLi
$a = "va";
$a = "xa";
define("host", "localhost");
define("username", "root");
define("password", "root");
define("dbname", "student");

$mysqli = new mysqli(host, username, password, dbname);

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
<body>
<form method="post" action="dbx.html">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-6 offset-3">
    
                <div class="card mt-3">
                    <div class="card-body">
                        <h3 class="card-title text-center"> Registration Form</h3>
                        <div class="row">
                            <div class="col-6">
                                <label for="first_name">First Name:</label>
                                
                               <input  type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required/>
                            </div>
                            <div class="col-6">
                                <label for="Last_name">Last Name:</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="last Name" required/>
                            </div>
                        </div>
                        <div class="row my-2">
                            <DIV class="col-6">
                                <label for="DOB"> Date of Birth</label>
                                <input type="date" name="birth" id="DOB" class="form-control" placeholder="DOB">
                            </DIV>
                            <div class="col-6">
                                <label for="email_id" >Email:</label>
                                <input type="email" name="email_id" class="form-control" id="email_id" placeholder="Enter your email_id" required/>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-12">
                                <label> Address:</label>
                                <textarea class="form-control" id="inputAddress" name="address" placeholder="XYZ"></textarea>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-4">
                                <label for="input_state" class="form-label">State:</label>
                                <select id="input_state" class="form-select">
                                  <option selected >Select... </option>
                                  <option>Punjab</option>
                                  <option> Haryana</option>
                                  <option> Delhi</option>
                                  <option> bihar</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="input_city" class="form-label">City:</label>
                                <select id="input_city" class="form-select">
                                  <option selected >Select... </option>
                                  <option>Ludhiana</option>
                                  <option> Jalandhar</option>
                                  <option> Moga</option>
                                  <option> Mohali</option>
                                </select>                                                                                                                                                                                                                                                   
                            </div>
                            <div class="col-4">
                                <label class="form-label" for="pinnumber">Pin Code:</label>
                                <input type="text" name="Pin_code" id="pinnumber"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        class="form-control" placeholder="City pin code no">
                            </div>
                        </div>
                        <div class="row my-1" >
                            <div class="col-6">
                              <label for="profile_pic">Profile Pic</label>
                              <input type="file" name="dp" id="profile_pic"/>
                            </div>
                        <div class="col-6">
                              <label for="Document_pic">10 th makesheet</label>
                              <input type="file" name="dp" id="Document_pic"/>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <button type="submit" class="btn btn-outline-success" class="form-control">Submit</button>
                            </div>
                        </div>

                    </div>
            
                </div>
    
            </div>
        </div>
    </div> 
    </form>    
</body>
</html>



