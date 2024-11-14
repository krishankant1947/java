<?php
require "project.php";
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

      <form action="">
         <div class="card mt-4 mx-5">
            <div class="card-body">
               <h2>Academic Details</h2>
               <div class="row my-3">
                  <div class="col-2"></div>
                  <div class="col-2">
                     <h6>BOARD</h6>
                  </div>
                  <div class="col-2">
                     <h6>YEAR OF PASSING</h6>
                  </div>
                  <div class="col-3">
                     <h6>STATE FROM WHERE COMPLETED</h6>
                  </div>
                  <div class="col-3">
                     <h6>RESULT
                        (CGPA/PERCENTAGE)
                     </h6>
                  </div>
               </div>
               <div class="row my-3">
                  <div class="col-2">
                     <h5>X STD</h5>
                  </div>
                  <div class="col-2">
                     <input type="text"  class="form-control" id="" placeholder="X STD board">
                     <label for="" ></label>
                  </div>
                  <div class="col-2">
                     <input type="text"  class="form-control" id="" placeholder="X STD Year Passing">
                     <label for="" ></label>
                  </div>
                  <div class="col-3">
                     <input type="text"  class="form-control" id="" placeholder="X STD State">
                     <label for="" ></label>
                  </div>
                  <div class="col-3">
                     <input type="text"  class="form-control" id="" placeholder="X STD Result">
                     <label for="" ></label>
                  </div>
               </div>
               <div class="row">
                  <div class="col-2">
                  <h5>XI STD</h5>
                  </div>

                  <div class="col-2">
                     <input type="text"  class="form-control" id="" placeholder="X STD board">
                     <label for="" ></label>
                  </div>
            
               <div class="col-2">
                  <input type="text"  class="form-control" id="" placeholder="X STD Year Passing">
                  <label for="" ></label>
               </div>
               <div class="col-3">
                  <input type="text"  class="form-control" id="" placeholder="X STD State">
                  <label for="" ></label>
               </div>
               <div class="col-3">
                  <input type="text"  class="form-control" id="" placeholder="X STD Result">
                  <label for="" ></label>
               </div>
            </div>

            <div class="row my-3">
               <div class="col-2">
               <h5>XII STD</h5>
               </div>
               <div class="col-2">
                  <input type="text"  class="form-control" id="" placeholder="X STD board">
                  <label for="" ></label>
               </div>

            <div class="col-2"> 
               <input type="text"  class="form-control" id="" placeholder="X STD Year Passing">
               <label for="" ></label>
            </div>
            <div class="col-3">
               <input type="text"  class="form-control" id="" placeholder="X STD State">
               <label for="" ></label>
            </div>
            <div class="col-3">
               <input type="text"  class="form-control" id="" placeholder="X STD Result">
               <label for="" ></label>
            </div>
         </div>
         </div><!--card-body-->
         </div>
      </form>
   </body>
</html>