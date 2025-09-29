<?php
class Fruit {
    public $name;
    public $color;

    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_color($color) {
        $this->color = $color;
    }

    public function get_color() {
        return $this->color;
    }
}

$apple = new Fruit();

$apple->set_name('Apple');
$apple->set_color('Green');

echo "Fruit name is ".$apple->get_name();
echo "<br>";
echo "Fruit color is ".$apple->get_color();