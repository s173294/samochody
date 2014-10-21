<?php

include_once('Car.php');

$myCar = new Car();
$myCar
->setModel('Mustang')
->helloCar()
;
//$myCar->helloCar;

echo $myCar->getModel();

?>