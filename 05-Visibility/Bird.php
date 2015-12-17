<?php

// public
// protected
// private

class Bird {
  protected $canfly;
  protected $legCount;

  public function __construct($canFly, $legCount) {
    $this->canFly = $canFly;
    $this->legCount = $legCount;
  }

  protected function canFly() {
    return $this->canFly;
  }

  public function getLegCount() {
    return $this->$legCount;
  }
}
 ?>
