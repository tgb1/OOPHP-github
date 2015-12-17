<?php

// Objects
$object = new stdClass;
$object->names = ['John', 'Tjeerd', 'name3'];

foreach($object->names as $name) {
  echo $name . '<br />';
}

?>
