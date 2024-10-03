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
    <form action=""  method="get">
        <div class="row">
            <div class="col-4 offset-4">
            <div class="row my-1">
                    <div class="col-12">
                           <img src="ghk.jfif" >
                        </div>
                <div class="row my-1">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="userentry" id="Usernamelogin">
                            <label for="Usernamelogin">Username:</label>
                        </div>
                     </div>
                </div>
                <div class="row my-1">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text"  class="form-control" name="useremailentry" id="Useremaillogin">
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
                <button type="submit" class="form-control" >login </button>
                </div>
                </div>
            </div>
            </div><!--offset-->
        </div><!--row-->
    </form>
</body>
</html>