<?php
require "config 2.php";
require "templates/header.php";
?>
<table border="1" width="100%" class="table table-striped table-hover">
    <?php
   
    $sql="select * from dist ORDER BY `id` DESC";
    $stmt=$pdo->prepare($sql);
    
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($row);
    foreach($rows as $row){
        echo <<<POO
        
        <tr>
            <td>{$row['name']}</td>
            <td><a href="domicle.php?action=edit&id={$row['id']}"><i class="fa-solid fa-pen-to-square"></i></a> 
            <a href="javascript://"  onclick="delele(event,this)" data-id="{$row['id']}"><i class="fa-solid fa-trash-can"></i></a></td>
        </tr>
        
        POO;
    }
    ?></table>