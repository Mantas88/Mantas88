<?php


class lentele{
    public $table = [];
    function add ($a){
        $this->table [] = $a;
    }
    function get(){

        for ($i = 0; $i < count($this->table); $i++){

            $mas = 0;
            for ($j = 0; $j <count($this->table[$i]); $j++){
                $mas += $this->table[$i][$j];

            }
            $this->table[$i][] = $mas/count($this->table[$i]);

        }
        echo '<table border="1">';
        for ($x = 0; $x < count($this->table); $x++){
            echo '<tr>';
            for ($y = 0; $y < count($this->table[$x]); $y++) {
                echo '<td>' . $this->table[$x][$y];
                echo '</td>';
            }
            echo '<tr>';
        }
        echo '</table>';
    }


}




$l = new lentele();
$l->add([3, 6, 9]);
$l->add([2, 4, 6]);
$l->add([5, 10, 15, 20]);
echo json_encode($l->table);
$l->get();
/**
Sukurkite PHP skriptą, kuriame aprašykite klasę lentele, kurioje būtų viena savybė ‐ $table,
 * kuri bus dvimatis masyvas, taip pat būtų metodas add, kurio parametras yra 3 skaičių masyvas.
 * Patalpinti gautą masyvą į savybės %table masyvą. Sukurkite metodą get(),
 * kuris paskaičiuoja kiekvienoje lentelės eilutėje esančių elementų vidurkį ir jų patalpina į eilutės pabaigą.
 * Išvesti savybės $table masyvą HTML lentele. Pademonstruokite veikimą.

 */