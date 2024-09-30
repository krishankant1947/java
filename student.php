<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
$roll=['1','2','3','4'];
//$name="Krishan kant";
$Mothers=["Nibha","Guddy","Neeleam","Neha"];
$names=["Krishan kant","Rahul","Rohit","Love"];
$Fathers=["abc","ABC","efg","EFG"];

echo '<ul>';
for($a=0; $a <count($names); $a++ ){

printf("<li>%d %s  %s  %s</li>",$roll[$a] ,$names[$a], $Fathers[$a] ,$Mothers[$a]);

}




$students = [
    ['name'=>'Vipan Kumar','father'=>'','mother'=>''],
    ['name'=>'Vipan Kumar 1','father'=>'','mother'=>''],
    ['name'=>'Vipan Kumar 2','father'=>'sdf','mother'=>''],
    ['name'=>'Vipan Kumar 3' ,'father'=>'sasdfsadf','mother'=>''],
    ['name'=>'Vipan Kumar  4','father'=>'','mother'=>''],
];
echo '<pre>',print_r($students),'</pre>';
?>
</head>
<body>
<table border="2" width="100%">
        <tr>
            <td>Roll no</td>
            <td>Name</td>
            <td>Father name</td>
            <td>Mother name</td>
        </tr>
        <?php 
        foreach($students as $key => $value){
            $series = 'BCA-'.($key+1).'0000';
            echo <<<TRROW
            <tr>
                <td>$series</td>
                <td>{$value['name']}</td>
                <td>{$value['father']}</td>
                <td>{$value['mother']}</td>
            </tr>
TRROW;
        }

?>
    </table>
</body>
</html>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
$students = [
    ['name'=>'Vipan Kumar','father'=>'abc','mother'=>'rajandeep','hindi'=>'master','English'=>'master','Math'=>'master','Science'=>'master','SST'=>'master','Punjabi'=>'master'],
    ['name'=>'Krishan kant','father'=>' ABC','mother'=>'rajarani','hindi'=>'master','English'=>'master','Math'=>'master','Science'=>'master','SST'=>'master','Punjabi'=>'master'],
    ['name'=>'Rahul','father'=>'DEFG','mother'=>'rani','hindi'=>'master','English'=>'master','Math'=>'master','Science'=>'master','SST'=>'master','Punjabi'=>'master'],
    ['name'=>'suraj kumar' ,'father'=>'SHARUN','mother'=>'chinkio','hindi'=>',master','English'=>'master','Math'=>'master','Science'=>'master','SST'=>'master','Punjabi'=>'master'],
    ['name'=>'Vijy Kumar  ','father'=>'jasjot','mother'=>'pinki','hindi'=>'master','English'=>'master','Math'=>'master','Science'=>'master','SST'=>'master','Punjabi'=>'master'],
];

?>;
</head>
<body>
    


<table border="2" width="100%">
<tr>
    <td>Roll no</td>
    <td>Name</td>
    <td>Father name</td>
    <td>Mother name</td>
    <td>hindi</td>
    <td>English</td>
    <td>Math</td>
    <td>Science</td>
    <td>SST</td>
    <td>Punjabi</td>
</tr>
<?php 
foreach($students as $key => $value){
    $series = 'BCA-'.($key+1);
    echo <<<TRROW
    <tr>
        <td>$series</td>
        <td>{$value['name']}</td>
        <td>{$value['father']}</td>
        <td>{$value['mother']}</td>
        <td>{$value['hindi']}</td>
        <td>{$value['English']}</td>
        <td>{$value['Math']}</td>
        <td>{$value['Science']}</td>
        <td>{$value['SST']}</td>
         <td>{$value['Punjabi']}</td>
        
    </tr>
TRROW;
}

?>
</table>












</body>
</html>