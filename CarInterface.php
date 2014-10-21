<?php

include_once('Car.php');

interface CarInterface{
	public function helloCar();
	public function setModel($model);
	public function getModel();

}