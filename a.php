<?php
$name="Krishan kant";


   $associt = [
    'name'=>"Krishan kant",
    "age"=>"19",
    "class"=>"12",
    "asdkfj"=>"AAAAAAAA"
   ];
 echo  $associt["name"];


 $test=["1",'b','c','dfasfa'];
   echo $test[1];

$name = $associt['age'] . ' ' . $test[1] . ' - ' .  "" .'vipan kumar';

$test[] = __LINE__;
$test[] = __LINE__;
$test[] = __LINE__;
$associt["vp;ioasdfhapsofdhnasodihfpasoi"] = "|sadfasdfasdf";
var_dump($test, $associt['name']);


for($a=0; $a<count($test); $a++){

    printf("%s<br/>", $test[$a]);
}

foreach($associt as $x => $d ){
    printf("%s => %s == %s <br/>", $associt[$x], $x, $d);
}
?>