<?php

include_once('Car.php');

$myCar = new Car();
$myCar
->setModel('Mustang')
->helloCar()
;
//$myCar->helloCar;

//echo $myCar->getModel();

$auto1 = new Car('1.3 JTD');
echo $auto1->getSilnik();
/*$auto1_nowysilnik = new NewEngine();
$auto1_nowysilnik->zmienSilnik($auto1->setSilnik('1.9 JTD'));
$auto1_nowysilnik->zmienSilnik(auto1, '1.9 JTD');
echo $auto1->getSilnik();*/

//$auto1_nowysilnik = new NewEngine($auto1);
$auto1->nowySilnik = new NewEngine('1.9 JTD');
echo $auto1->getSilnik();

?>