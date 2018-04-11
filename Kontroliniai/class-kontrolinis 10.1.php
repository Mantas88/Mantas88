<?php

class turgus {

  public $mas=[];

  function automobilis($gamintojas, $modelis, $metai, $kaina){
    $this ->mas[] = [
        'gamintojas' => $gamintojas,
        'modelis' => $modelis,
        'metai' => $metai,
        'kaina' => $kaina
    ];
  }
  function minKaina(){

    $kaina=$this->mas[0]['kaina'];
    foreach ($this-> mas as $min ){
      if($min['kaina']<$kaina)
      $kaina=$kaina ['kaina'];
    }
    return $kaina;
  }
}
$p = new turgus();

$p -> automobilis('BMW', 'X5','2003', 6000);
$p -> automobilis('BMW', 'X5','2002', 15000);
$p -> automobilis('BMW', 'X5','2001', 8000);
echo $p->minKaina();

 ?>

<!--Sukurti klasę turgus. Sukurti funkciją atomobilis, su kuria būtų galima pateikti automobilį į turgų. -->
<!--Funkcijos parametrai: gamintojas, modelis, metai, kaina. -->
<!--Automobilių informacijų talpinti į klasės savybę automobiliai (masyvas).-->
<!--Sukurti funkciją minKaina, kuri surastų automobilį su mažiausia kaina.-->

