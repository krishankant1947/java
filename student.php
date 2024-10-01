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













