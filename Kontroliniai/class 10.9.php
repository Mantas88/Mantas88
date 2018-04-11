<?php
/*
Sukurkite PHP skriptą, kuriame aprašykite klasę auto, kurioje būtų viena savybė ‐ $sarasas.
__construct metode įrasykite 3 automobiliu duomenis asociatyvio masyvo formoje.
 Duomenys: nuotrauka, gamintojas, modelis, metai, kaina, pastabos. Sukurkite metodą getList(),kuris išveda asociatyvio masyvo duomnenis HTML lenteles formoje.
Sukurti egzemplioriu ir ivykdyti funkcija.

*/

class auto{
    public $sarasas;
    function __construct($m){
        $this->sarasas  = $m;

    }
    function getList(){
        echo '<table border="1">';
        for ($x=0; $x<count($this->sarasas); $x++){
            echo '<tr>';

            echo '<td>'.  $this->sarasas[$x]['Nuotrauka'] . '</td>';
            echo '<td>'.  $this->sarasas[$x]['Gamintojas'] . '</td>';
            echo '<td>'.  $this->sarasas[$x]['Marke'] . '</td>';
            echo '<td>'.  $this->sarasas[$x]['Metai'] . '</td>';
            echo '<td>'.  $this->sarasas[$x]['Kaina'] . '</td>';
            echo '<td>'.  $this->sarasas[$x]['Pastabos'] . '</td>';


            echo '</tr>';
        }
        echo '</table>';
    }
}

$a = new auto([
    ['Nuotrauka' => '','Gamintojas' => 'BMW', 'Marke' => 'i8','Metai' => '2013', 'Kaina' => '73,000', 'Pastabos' => 'Dauzta'],
    ['Nuotrauka' => '','Gamintojas' => 'BMW', 'Marke' => 'i3','Metai' => '2010', 'Kaina' => '7000', 'Pastabos' => 'Skendus'],
    ['Nuotrauka' => '','Gamintojas' => 'BMW', 'Marke' => '39','Metai' => '2002', 'Kaina' => '4500', 'Pastabos' => 'Cipuota slyva']

]);
echo json_encode($a);
//var_dump($a);

$a->getList();
