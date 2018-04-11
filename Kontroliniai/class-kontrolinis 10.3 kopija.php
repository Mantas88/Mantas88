<?php

/*
Padaryti klasę automobiliai. Sukurti funkciją automobilis.
Parametrai: a) gamintojas, b) modelis, c) kuras: benzinas, dyzelis, d) kuro sąnaudos (kiek litrų / 100km).
Funkcija turi patalpinti automobilio duomenis kaip asociatyvinį masyvą į klasės savybę sąrašas (paprastas masyvas).
Sukurti funkciją kurovidurkisDyzelis kuri gražina dyzelinių masinų kuro sanaudų vidurkį.
Sukurti funkcija kurovidurkisBenzinas kuri gražina benzininių masinų kuro sąnaudų vidurkį.
*/

class auto
{
    public $automobiliai;

    function automobilis($g, $m, $k, $s)
    {

        $this->automobiliai [] = [
            'gam' => $g,
            'mod' => $m,
            'kur' => $k,
            'san' => $s

        ];

    }

    function kuroVidurkisDyzelis()
    {
        $vd = 0;
        $masina = 0;
        for ($i = 0; $i < count($this->automobiliai); $i++) {
            if ($this->automobiliai[$i]['kur'] == 'Dyzelis') {
                $vd++;
                $masina += $this->automobiliai[$i]['san'];
            }
        }
        return $masina / $vd;

    }

    function kuroVidurkisBenzinas()
    {
        $vd = 0;
        $masina = 0;
        for ($i = 0; $i < count($this->automobiliai); $i++) {
            if ($this->automobiliai[$i]['kur'] == 'Benzinas') {
                $vd++;
                $masina += $this->automobiliai[$i]['san'];
            }
            return $masina/$vd;
        }

    }

}
$a =  new auto();
$a -> automobilis('BMW', 'M3', 'Benzinas', 15);
$a -> automobilis('BMW', 'M5', 'Benzinas', 18.6);
$a -> automobilis('Audi', 'RS6', 'Benzinas', 22.2);
$a -> automobilis('Audi', 'S4', 'Benzinas', 14.8);
$a -> automobilis('BMW', 'E39', 'Dyzelis', 11.3);
$a -> automobilis('BMW', 'E46', 'Dyzelis', 8.5);
$a -> automobilis('Audi', 'A4', 'Dyzelis', 8.3);
$a -> automobilis('Audi', 'A6', 'Dyzelis', 11.3);

echo json_encode($a->automobiliai);
echo '<br>';
echo 'Dyzelio vid sanaudos ' . $a->kuroVidurkisDyzelis();
echo '<br>';
echo 'Benzino vid sanaudos ' . $a->kuroVidurkisBenzinas();
