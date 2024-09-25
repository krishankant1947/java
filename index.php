<?php

// error_reporting(0);
// ini_set('display_errors', 0);

for (let i=1;i<=12;i++){
    for (let a=1; a<=12-1; a++){
        Document.write("&nbsp");
    }
    for(let c=1; c<=i c++){
        Document.write("*");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$age = 1;;
$blacklisted = true;

var_dump($age>18 && !$blacklisted);

if($age > 18 && !$blacklisted){
    echo "You are 18+ and can vote";
} elseif($age>18 && $blacklisted) {
    echo "You cannot vote becusey you are banned";
} else{
    echo "You cannot     vote";
}

echo 1/1;

$name = "viapn Kumar";
echo $name;

?>
<body>
    <table border=1 width=100%>
    <?php

echo "asdf a","sadfasdfas","eeeeeeeeeeeee";
print("asdf a");

print("asdf a");
print("<br/>*<br/>");
print("**<br/>");
for($a=1;  $a<=10; $a = $a+1){
    // echo <<<'KR'
    //     <tr>
    //         <td>" '{$a}</td>
    //         <td>2</td>
    //         <td>sdf</td>
    //         <td>asdf</td>
    //     </tr>
    //     KR;
    echo  "<tr>
            <td>{$a}</td>
            <td>2</td>
            <td>sdf</td>
            <td>asdf</td>
        </tr>";
}
    ?>
    </table>
    <table border="2" width="100%">
        <tr>
            <td>asdasdf</td>
            <td>z</td>
            <td>sadf</td>
            <td>xadf</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>
https://www.tutorialspoint.com/php/php_object_oriented.htm