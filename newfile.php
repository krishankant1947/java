<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Search</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="search" placeholder="type anything .... " required />
</div>
<button type="submit" class="btn btn-primary">Search</button>
<button type="button" class="btn btn-secondary">Clear</button>
                </form>
            </div>
        </div>
            
    </div>
</body>
</html>
<?php
require "config.php";
$sql= "SELECT FNAME,count(*) FROM emp e GROUP BY FNAME ";
$data= $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

var_dump($_POST);
$sql="select * from emp where `FNAME`=:search or LNAME=:search";
$stmt = $pdo->prepare($sql);
$stmt->execute($_POST);
$rows= $stmt->fetchAll(PDO::FETCH_ASSOC);
for($a=0; $a < count($rows); $a++){
    echo <<<EOD
    <tr>
       
        <td>{$rows[$a]['FNAME']}</td>
        <td>{$rows[$a]['LNAME']}</td>
    </tr>
EOD;
}
?>