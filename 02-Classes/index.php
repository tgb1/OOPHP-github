<?php

require 'Person.php';

$person = new Person;

$person->name = 'John';
$person->age = '20';

echo $person->message();
?>
