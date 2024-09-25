<?php
$age= 20;
echo $age,"<br/>";
$name="Krishan kant";
echo $name,'<br/>';
$address="mahadev nagar <br/> lohara road <br/> ludhiana <br/>  punjab ";
echo " fa fa fa df $address";
echo '<hr/>';
echo <<<'na'

<?php echo $age?><br/>

<?php echo $name;?><br/>

<?php echo $address;?>

na;

echo <<<na
$age<br/>$name <br/>$address<br/>
na;
echo <<<'na'

  $age  <br/>

  $name  <br/>

  $address  <br/>
na;


$name1= "Vipan Kumar";
$name2 ="        Vipan Kumar     ";
$age = 20.12;
// echo $name1,$name2, strlen($name1), '--',strlen($name2),'<pre>';;

// var_dump($name1, $name2, $name1 == $name2, $age,'</pre12>');

$names = ["Vipan KUmar", "Krishna Kant",'a','b', "Kaushal", 1212, 212.1213];
$ages = array(
    12,
    12,
    12121,
    100,
    10,
    1,2
);

echo '<ul>';
for($a=0; $a <count($names); $a++ ){

    printf("<li> %s is %d at %d %0d sdf af a </li>", $names[$a], $ages[$a], $a, $a);
    // echo '<li>',$a . '=>' . $names[$a]  ,"</li>";
}
echo '</ul>';
// var_dump(count($names), sizeof($ages), $names, $ages);
?>
<br/>
name=[];
nme = Array();




