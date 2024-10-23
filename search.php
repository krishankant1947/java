<?php 
require "config.php";

$sql = "SELECT name, count(*) FROM teacher t GROUP BY name";
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($data);
echo '</pre>';

$data = $pdo->query($sql)->fetchAll(PDO::FETCH_KEY_PAIR);
echo '<pre>';
print_r($data);
echo '</pre>';

//https://phpdelusions.net/pdo/fetch_modes#FETCH_KEY_PAIR
//https://cmc.thewebking.in/bible-test-2024/
?>
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
  <input type="text" class="form-control" id="exampleFormControlInput1" name="search"  placeholder="type anything .... " required />
</div>
<button type="submit" class="btn btn-primary">Search</button>
<button type="button" class="btn btn-secondary">Clear</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <p class="text-start1">You have search for <span class="badge text-bg-secondary"><?php echo $_POST['search'];?></span></p>
            <table class="table table-striped">
                <?php
                    // $sql = "select * from teacher where name=? OR Father_name=? or id LIKE ? or mother_name LIKE ?";
                    // $stmt = $pdo->prepare($sql);
                    // $stmt->execute(
                    //     [
                    //         $_POST['search'], 
                    //         $_POST['search'], 
                    //         "%{$_POST['search']}%",
                    //         "%{$_POST['search']}%"
                    //     ]
                    // );

                    // $search_params =                         [
                    //     'id'=> "%{$_POST['search']}%",
                    //     'mother'=> "%{$_POST['search']}%",
                    //     'name' => $_POST['search'], 
                    //     'father' => $_POST['search'], 
                    // ];
                    // $sql = "select * from teacher where name=:name OR Father_name=:father or id LIKE :id or mother_name LIKE :mother";
                    $sql = "select * from teacher where name=:search OR Father_name=:search or id = :search or mother_name =:search";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute($_POST);
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    for($a=0; $a < count($rows); $a++){
                        echo <<<EOD
                        <tr>
                            <td>{$rows[$a]['id']}</td>
                            <td>{$rows[$a]['name']}</td>
                            <td>{$rows[$a]['Father_name']}</td>
                            <td>{$rows[$a]['mother_name']}</td>
                        </tr>
EOD;
                    }
                ?>
            </table>
            </div>
        </div>
    </div>
    <?php
                        echo '<pre>';
                        print_r($rows);
                        echo '</pre>';
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
