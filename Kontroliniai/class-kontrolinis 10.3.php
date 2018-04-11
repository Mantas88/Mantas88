<?php
class automobiliai {
    public $sarasas;
    function auto($gamintojas, $modelis, $kuras){
        if (!isset($this->sarasas)) $this->v = [];
        $this->sarasas[] = [
            'gamintojas' => $gamintojas,
            'modelis' => $modelis,
            'kuras' => $kuras,
            //'sanaudos' => $sanaudos
        ];
    }
    function dyzelis(){
        $sum = 0;
        for ($i=0; $i<count($this->sarasas); $i++){
            if ($this->sarasas[$i]['kuras'] == 'dyzelis') $sum++;
        }
        return $sum;
    }
    function benzinas(){
        $sum = 0;
        for ($i=0; $i<count($this->sarasas); $i++){
            if ($this->sarasas[$i]['kuras'] == 'benzinas') $sum++;
        }
        return $sum;
    }
}
$objektas = new automobiliai();
$objektas->auto('honda', 'civic', 'benzinas');
$objektas->auto('toyota', 'auris', 'dyzelis');
$objektas->auto('mazda', 6, 'benzinas');
echo $objektas->dyzelis();
echo '<br>';
echo $objektas->benzinas();
/*
Padaryti klasę automobiliai. Sukurti funkciją automobilis.
 Parametrai: a) gamintojas, b) modelis, c) kuras: benzinas, dyzelis, d) kuro sąnaudos (kiek litrų / 100km).
 Funkcija turi patalpinti automobilio duomenis kaip asociatyvinį masyvą į klasės savybę sąrašas (paprastas masyvas).
 Sukurti funkciją kurovidurkisDyzelis kuri gražina dyzelinių masinų kuro sanaudų vidurkį.
 Sukurti funkcija kurovidurkisBenzinas kuri gražina benzininių masinų kuro sąnaudų vidurkį.
*/

/*Padaryti klasę personalas. Sukurti funkciją persona.
 * Parametrai: a) vardas, b) pavardė, c) lytis.
 * Funkcija turi patalpinti personos duomenis kaip asociatyvinį masyvą į klasės savybę darbuotojai (paprastas masyvas).
 * Sukurti funkciją kiekMoteru kuri gražina personalo moterų skaiciu.
 * Sukurti funkciją kiekVyru kuri gražina personalo vyrų skaičių.
 */
