<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body  >
    <form action="" class="bg-primary " method="post">
        <div class="row">
            <div class="col-4 offset-4 border border-4 my-4 bg-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="login.jpg" width="40%" >
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-12">
                        <label for="emailid">Email</label>
                        <input type="email" name="email" required id="emailid" class="form-control" placeholder="enter email">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-12">
                        <label for="password">Password</label>
                        <input type="password" name="password123" id="password" class="form-control" placeholder="enter your password">
                    </div>
                </div>
                <div>
                    <input type="checkbox" onclick="changeaterbut(this)">Show Password
                </div>
                
                <div class="row my-2">
                    <div class="col-12 d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-outline-success ">login</button>
                    </div>
                </div>
                <div>
                    <a href="">Forgot password ?</a>
                </div>
                <div>
                    <label for="">Don't have an account? &nbsp;<a href="">Sign up</a></label>
                </div>
            </div><!--col & offset-->
        </div><!--row-->
    </form>
    <script type="text/javascript">
        function changeaterbut(object){
          
            console.log(object.checked)
            if(object.checked){
                document.getElementById('password').type="text"  
            }
            else{
                document.getElementById('password').type="password"    
            }
        }
    </script>
</body>
</html>