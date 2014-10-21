<?php

include_once('CarInterface.php');
include_once('RaceInterface.php');
include_once('EngineInterface.php');

class Car{
	private $silnik;
	public $model;
	protected $kolo;
	private $vMax;
	private $acceleration;
	private $HP;

	public function helloCar(){
		echo "Jestem autem";
	}

	public function setModel($model){
		$this->model = $model;
		return $this;
	}
	
	public function getModel(){
		return $this->model;
	}
	
	public function getVMax(){
		$czas = 100 //przyspieszenie w ciagu 100 s.
		return $acceleration * 100; 
	}
	
	public function getAcceleration(){
		$czas = 100; //przyspieszenie w ciagu 100 s.
		return $vMax/100;
	}
	
	public function getHP(){
		return $this->HP;
	}
}