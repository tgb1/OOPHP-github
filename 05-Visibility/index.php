<?php

require 'Bird.php';
require 'Penguin.php';

$penguin = new Penguin(false, 2);

//echo $bird->legCount;
//echo $penguin->foo();

if ($penguin->canFly()) {
  // can fly
}
 ?>
