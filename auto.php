<?php

class Auto {
public $marka;
public $modelis;
public $gads;

function __construct($marka, $modelis, $gads) {
    $this->marka = $marka;
    $this->modelis = $modelis;
    $this->gads = $gads;
}


function showInfo (){
    return "Marka : " . $this->marka . "<br>" ."Modelis : " . $this->modelis . "<br>" ."Marka : " . $this->gads;
}
}
$auto1 = new Auto('Audi', 'A4', 2020);
$auto2 = new Auto('BMW', 'X5', 2022);

echo $auto1->showInfo();
echo "<br><br>";
echo $auto2->showInfo();

