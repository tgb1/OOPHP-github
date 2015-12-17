<?php

require 'Bird.php';
require 'Pigeon.php';
require 'Penguin.php';

//$bird = new Bird(true, 2);
$pigeon = new Pigeon(true, 2);
$penguin = new Penguin(false, 2);

//echo $bird->legCount;
echo $pigeon->legCount . '<br />';

if ($penguin->canFly()) {
  echo 'Can fly!';
}

 ?>
