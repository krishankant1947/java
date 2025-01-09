<?php


abstract class Vehicle {
    private $state = "standing";
    protected $model = 'BMW';
    protected $type = '';

    function __construct($type = 'vehicle'){
        $this->type = $type;
        echo "<br/>initializing vehicle as {$this->type}<br/>";
    }
    function startDriving(){
        $this->state = "driving";
        echo $this->model. " {$this->type} now moving";        
    }
    abstract function setTyres();
}

class Car extends Vehicle
{
    var $tires = ["back-left","back-right","front-right","front-left","middle-right","middle-left"];
    var $rooftop = true;
    var $engine = "";

    // @overriding
    function __construct(){
        parent::__construct('car');
    }

    public function setModel($model){
        $this->model = $model;
    }
    function setTyres(){

    }
}

class Bike extends Vehicle{
    // @overriding
    function __construct(){
        parent::__construct('bike');
    }
    function startDriving(){
        parent::startDriving();
        echo " at 20<br/>";
    }
    function setTyres(){

    }
}