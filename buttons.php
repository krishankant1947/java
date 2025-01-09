<?php

require 'mouse.php';

use Hp\Mouse;
use Hp\Keyboard;
use Hp\Printer;

$i = 0;
$mouse[] = new Mouse();
$mouse[$i]->click();
$i++;

$mouse[] = new Keyboard();
$mouse[$i]->press();
$i++;

$mouse[] = new Printer();
$mouse[$i]->print();
$i++;

$mouse[] = new Mouse();
$mouse[$i]->click();
$i++;

$mouse[] = new Keyboard();
$mouse[$i]->press();
$i++;

$mouse[] = new Printer();
$mouse[$i]->print();
$i++;
$mouse[] = new Mouse();
$mouse[$i]->click();
$i++;

$mouse[] = new Keyboard();
$mouse[$i]->press();
$i++;

$mouse[] = new Printer();
$mouse[$i]->print();
$i++;
$mouse[] = new Mouse();
$mouse[$i]->click();
$i++;

$mouse[] = new Keyboard();
$mouse[$i]->press();
$i++;

$mouse[] = new Printer();
$mouse[$i]->print();
$i++;
$mouse[] = new Mouse();
$mouse[$i]->click();
$i++;

$mouse[] = new Keyboard();
$mouse[$i]->press();
$i++;

$mouse[] = new Printer();
$mouse[$i]->print();
$i++;
$mouse[] = new Mouse();
$mouse[$i]->click();
$i++;

$mouse[] = new Keyboard();
$mouse[$i]->press();
$i++;

$mouse[] = new Printer();
$mouse[$i]->print();
$i++;
echo '<br/><hr/>';
foreach($mouse as $m){

    // if(get_class($m) == 'Keyboard' || get_class($m) == 'Mouse')
    if($m instanceof HP\event)
    {
        $m->execute();
    }
}
echo "it's working";


