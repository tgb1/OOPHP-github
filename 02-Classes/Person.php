<?php

class Person {
  public $name;
  public $age;

  public function message() {
    return $this->name . ' is ' . $this->age . ' years old';
  }
}

 ?>
