<?php
namespace HP;
// namespace Postgres;
// class Student{}

// namespace MySql;
// class Student{}


// Postgres\Student();
// MySql\Student();

interface event{
    function doAction($type);
}

trait SqlStudentUpdate{
    public $stt = 'xx';
    function execute(){
        echo "<br/>Executeing {$this->stt}";
    }

    function prepare(){
        //
    }
    function delete(){
        //
    }
}
abstract class Button{
    protected $state;
    public function display(){
        echo "{$this->state} It is working<br/>";
    }
    // abstract protected function doAction($action);
}

class Mouse extends Button implements event{
    use SqlStudentUpdate;

    function click(){
        $this->doAction('click');
    }
    function doAction($action){
        $this->state = $action;
    }
}

class Keyboard extends Button{
    function press(){
        $this->doAction('pressed');
    }
    function doAction($action){
        $this->state = $action;
    }
}

class Printer{
    function print(){
        echo('printing now<br/>');
    }
}