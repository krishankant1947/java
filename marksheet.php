<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
$students = [
    ['name'=>'Jasjot','father'=>'abc','mother'=>'rajandeep','hindi'=>'98','English'=>'86','Math'=>'92','Science'=>'79','SST'=>'95','Punjabi'=>'97','Total'=>''],
    ['name'=>'Krishan kant','father'=>' ABC','mother'=>'rajarani','hindi'=>'92','English'=>'84','Math'=>'98','Science'=>'91','SST'=>'88','Punjabi'=>'90','Total'=>''],
    ['name'=>'Rahul','father'=>'DEFG','mother'=>'rani','hindi'=>'79','English'=>'89','Math'=>'95','Science'=>'A','SST'=>'81','Punjabi'=>'91','Total'=>''],
    ['name'=>'suraj kumar' ,'father'=>'SHARUN','mother'=>'chinkio','hindi'=>'95','English'=>'96','Math'=>'91','Science'=>'79','SST'=>'93','Punjabi'=>'95','Total'=>''],
    ['name'=>'Vijay Kumar  ','father'=>'jasjot','mother'=>'pinki','hindi'=>'92','English'=>'78','Math'=>'89','Science'=>'89','SST'=>'80','Punjabi'=>'89','Total'=>''],
];

?>
</head>
<body>    
       <table border="1" width="100%">
<tr>
    <td>Class</td>
    <td>Name</td>
    <td>Father name</td>
    <td>Mother name</td>
    <td>Hindi</td>
    <td>English</td>
    <td>Math</td>
    <td>Science</td>
    <td>SST</td>
    <td>Punjabi</td>.
    <td>Total</td>
</tr>
<?php 
foreach($students as $key => $value){
    $series = '12 th';
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
         <td>{$value['Total']}</td>
        
    </tr>
TRROW;
}

?>
</table>
</body>
</html>