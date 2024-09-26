<pre><?php

$tires = [];


class Car{
    var $tires = ["back-left","back-right","front-right","front-left","middle-right","middle-left"];
    var $rooftop = true;
    var $engine = "";

    private $state = "standing";
    public $model = "BMW";

    function startDriving(){
        $this->state = "driving";
        echo "Car now moving<br/>";        
    }
}

$mycars = [];

$mycars[] = new Car();
$mycars[0]->startDriving();
$mycars[0]->model = "maruti";

$mycars[] = new Car();
$mycars[1]->startDriving();
$mycars[1]->model = "Hyndai";

$mycars[] = new Car();
$mycars[2]->startDriving();
$mycars[2]->model = "SUZUKI";

$mycars[] = new Car();
$mycars[3]->startDriving();


echo $mycars[1]->model;
// var_dump($mycars);
echo "procesing.....";