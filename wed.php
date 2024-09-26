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

$names = ["Vipan KUmar", "Krishna Kant",'a','b','h', "Kaushal", 1212, 212.1213];
$ages = array(
    12,
    12,
    12121,
    12.2661920912,
    10,
    1,2,
    12000
);
$amount = 121212.989;
echo number_format($amount,2,".","");
echo '<ul>';
for($a=0; $a <count($names); $a++ ){

    printf("<li> %s is %0.2f at %d %s sdf af a </li>", $names[$a], $ages[$a], $a, $a);
    // echo '<li>',$a . '=>' . $names[$a]  ,"</li>";
}
echo '</ul>';
// var_dump(count($names), sizeof($ages), $names, $ages);

$name3="Krish <br/>";
$name4="         Rahul   <br/> ";
$old="19 <br/>";
echo $name3,$name4 ,$old;

$childs=["Krishan kant","Rahul","raju"];
 
var_dump($name3,$name4,$old);

 //for($a=1;  $a<=10; $a = $a+1){
  echo <<<'KR'
      <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
          <td>4</td>
      </tr>
      KR;




  echo  "<tr>
          <td>{$name4}</td>
          <td>2</td>
          <td>sdf</td>
          <td>asdf</td>
      </tr>";
 

?>
<br/>
name=[];
nme = Array();





