<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style type="text/css">
       
    </style>
</head>
<body>
    <section>
        <form method="post" id="loginform" action="dashboard.html" novalidate >
            <div class="row">
                <div class="col-4 offset-4 border">
                    <div class="row my-2">
                        <div class="col-12 text-center ">
                           <h1>Welcome Back</h1>
                           Enter your credentials to access your account
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12">
        
                            <div class="form-floating">
        
                                <input type="email" class="form-control" value1="vipan@gmail.com" required id="floatingEmail" placeholder="name@example.com">
                                <label for="floatingEmail">Email address</label>
                                <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                    Please choose a username.
                                  </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-12 ">
                            <div class="form-floating">
                                <input type="password" class="form-control" required id="floatingPassword" value1="Admin@123" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                    Please choose a password.
                                  </div>
                        </div>
        
                            </div>
                               
                    </div>
                    <div  class="row">
                        <div class="col-6">
                            <div  class="form-check">            
                                <input type="checkbox" class="form-check-input " id="checkboxs" >
                                <label class="form-check-label text-capitalize" for="checkboxs"> remember me</label>
                            </div>
             
                        </div>
                        <div class="col-6">
                            <a href="Restatation.html " class="text-decoration-none"> Forgot password?</a>
                        </div>
                    </div>
                   
                    <div class="row my-2 text-center">
                        <div class="col-12 d-grid gap-2 d-md-block">
                            <button class=" btn btn-primary" type="submit" className = 'was-validated'    >Login </button>
            
                        </div>
                    </div>
                </form>
    </section>
        </div>
    </div>
    
    <script type="text/javascript">
        
       

        $(document).ready(function(){
            

            $('#loginform').submit(function(e){
                $(this).addClass('was-validated')
                console.log($(this));
                let email = $('#floatingEmail').val().trim().toUpperCase();
                let password = $('#floatingPassword').val().trim() .toLowerCase();
                
                if(email.length == 0){
                   alert("Missing email");
                }

                if(password.length == 0){
                    alert("Missig password")
                }
                if(email.length == 0 || password.length==0){
                    e.preventDefault();
                }
            })
        })

    </script>
    
</body>
</html>