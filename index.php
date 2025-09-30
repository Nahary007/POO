<?php
//Parent class
abstract class Car {
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  abstract public function intro() : string;
}

//child class
class Audi extends Car {
  public function intro() : string {
    return "Choose german quality! I'm an $this->name";
  }
}

class Volvo extends Car {
  public function intro() : string {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

$audi = new Audi("Audi");
echo $audi->intro();
print "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
