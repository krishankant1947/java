<pre><?php

$tires = [];

require 'car.class.php';

$mycars = [];

$mycars[] = new Car();
$mycars[0]->setModel("maruti");
$mycars[0]->startDriving();

$mycars[] = new Car();
$mycars[1]->setModel("Hyndai");
$mycars[1]->startDriving();

$mycars[] = new Car();
$mycars[2]->setModel("SUZUKI");
$mycars[2]->startDriving();

$mycars[] = new Car();
$mycars[3]->startDriving();

$mycars[] = new Bike();
$mycars[4]->startDriving();

$mycars[] = new Bike();
$mycars[5]->startDriving();
$mycars[] = new Bike();
$mycars[6]->startDriving();
$mycars[] = new Bike();
$mycars[7]->startDriving();
$mycars[] = new Bike();
$mycars[8]->startDriving();
$mycars[] = new Bike();
$mycars[9]->startDriving();

$mycars[] = new Bike("truck");
$mycars[10]->startDriving();


// echo $mycars[1]->model;
// var_dump($mycars);


echo "procesing.....";


