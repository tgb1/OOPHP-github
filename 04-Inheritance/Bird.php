<?php

class Bird {
  public $canfly;
  public $legCount;

  public function __construct($canFly, $legCount) {
    $this->canFly = $canFly;
    $this->legCount = $legCount;
  }

  public function canFly() {
    return $this->canFly;
  }

  public function getLegCount() {
    return $this->$legCount;
  }
}
 ?>
