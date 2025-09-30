<?php

trait message1 {
  public function msg1() {
    echo "Hi there!";
  }
}

class Welcome {
  use message1;
}

$greeting = new Welcome();
$greeting->msg1();