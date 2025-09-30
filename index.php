<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro(){
    echo "The Fruit name is {$this->name} and the color is {$this->color}.";
  }
}


class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry? <br>";
    }
}

$strawberry = new Strawberry("Strawbery", "red");
$strawberry->message();
$strawberry->intro();