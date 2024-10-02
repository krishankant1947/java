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
    ['name'=>'Vijy Kumar  ','father'=>'jasjot','mother'=>'pinki','hindi'=>'92','English'=>'78','Math'=>'89','Science'=>'89','SST'=>'80','Punjabi'=>'89','Total'=>''],
];

?>;
</head>
<body>
    


<table border="2" width="100%">
<tr>
<h2> Marksheet</h2>
    <td>Class</td>
    <td>Name</td>
    <td>Father name</td>
    <td>Mother name</td>
    <td>Hindi</td>
    <td>English</td>
    <td>Math</td>
    <td>Science</td>
    <td>SST</td>
    <td>Punjabi</td>
    <td>Total</td>
    <td>persantage</td>
</tr>
<?php 
foreach($students as $key => $test){

   // $total['hindi'] +=$test['hindi'];
  //  $total['English']+=$test['English'];
   // $total['Math']+=$test['Math'];
    //$total['Science']+=$test['Science'];
   // $total['SST']+=$test['SST'];
   // $total['Punjabi']+=$test['Punjabi'];
//  $total['hindi'] = $total['hindi'] + $test['hindi'];
    $total_row = $test['hindi'] +$test['English'] +$test['Math'] +$test['Science']  +$test['SST'] +$test['Punjabi'];
    $persantage= round($total_row/600*100,2);
    $test['hindi'] = number_format($test['hindi'],2);
    if($test['Science']==0){
  $test['Science']= 'A';
    }

    echo <<<Krish
    <tr>
        <td>{$test['Class']}</td>   
        <td>{$test['name']}</td>
        <td>{$test['father']}</td>
        <td>{$test['mother']}</td>
        <td>{$test['hindi']}</td>
        <td>{$test['English']}</td>
        <td>{$test['Math']}</td>
        <td>{$test['Science']}</td>
        <td>{$test['SST']}</td>
        <td>{$test['Punjabi']}</td>
        <td>{$total_row}</td>
        <td>{$persantage}</td>
    </tr>
Krish;
}

$total['hindi'] = number_format($total['hindi'], 2);



?>
</table>
</body>
</html>