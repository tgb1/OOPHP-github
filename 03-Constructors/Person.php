<?php

class Person {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
    echo 'Constructed';
  }

  public function message() {
    return $this->name . ' is ' . $this->age . ' years old';
  }
}

 ?>
