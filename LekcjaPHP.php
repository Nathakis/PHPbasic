<?php

class Czlowiek
{
	public $imie;
	public $nazwisko;
	public $wiek;


	public function setImie($imie){
		this->imie = $imie;
		return true;
	}
	public function getImie(){
		return this->imie;
	}
}

$osoba = new Czlowiek();
//$osoba ->setimie("");

var_dump ($osoba);

?>