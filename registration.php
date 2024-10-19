<?php
//$dsn= "";
define("host","localhost");
define("username","root");
define("password","root");
define("dbname","school");
try{
    $mysqli= new mysqli(host,username,password,dbname);
}
catch (\Exception $ex){}
$sql= "insert into teacher(name,Father_name,mother_name) value('Rahul','kj','okey')";
$mysqli-> query($sql);
$result= $mysqli->query("select * from teacher");
?>
$sql = "insert into emp(FNAME,LNAME,Gender) value('Krish kant','br','m')";
//$mysqli->query($sql);
echo $sql,"<br/>";
//$result = $mysqli->query("select * from emp");
<?php
$dsn = "";
// PDO // 15-15

// MySQLi
$a = "va";
$a = "xa";






echo '<table width="100%">';
while ($row = $result->fetch_row()) {
     echo $row[0];
    printf("
<tr>
        <td>%d</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
       </tr>" ,$row[0], $row[1], $row[2], $row[3]);
}
echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <style>
        .container-fluid{
            background-image:url(log.png);
        }
     </style>
     <script type="text/javascript">
        function limitFirstName(event, object){
            tackEventOrder(event)
            // console.log(event.srcElement, object)
            event.srcElement.value = event.srcElement.value.toUpperCase()
        }
        function trackMouse(event){
          //  event.preventDefault();
            console.log(event.type)
        }
        function tackEventOrder(event){
            console.log(event.type)
        }
        function limitaddressName(event){
            tackproOrder(event)
            // console.log(event.srcElement, object)
            event.srcElement.value = event.srcElement.value.toUpperCase()
        }
        console.log("hello")
        function limitaddressName(event){
            tackEventOrder(event)
            event.srcElement.value = event.srcElement.value.toUpperCase()
        }
        function thisnumber(){
            trackkey(event)
            
        }
     </script>
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
                                <input onkeypress="limitFirstName(event, this)"
                                onkeyup="tackEventOrder(event)"
                                onblur="tackEventOrder(event)"
                                onfocus="tackEventOrder(event)"
                                onchange="tackEventOrder(event)"
                                ondblclick="tackEventOrder(event)"
                                type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required/>
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
                                <textarea class="form-control"  onkeypress="limitaddressName(event, this)"
                                onmousedown="tackeventOrder(event)"
                                onmousewheel="tackeventOrder(event)"
                                onfocus="tackeventOrder(event)"
                                onkeydown="tackeventOrder(event)"
                                onkeyup="tackeventOrder(event)" id="inputAddress" name="address" placeholder="XYZ"></textarea>
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
                        <div class="row">
                            <div class="col-5">
                                <button type="submit" class="btn btn-outline-success" class="form-control">Submit</button>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-6">
                                <label for="number"> phone number</label> 
                                <input type="number" class="form-control" onclick="thisnumber(event)" id="number"  placeholder="mobile number">
                               
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



