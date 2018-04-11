<?php
class table {
    public $m = [];
    function  generate(){
        for ($x = 0; $x < 5; $x++){
            $z =[];
            for ($c = 0; $c <5; $c++){
                $z[] = rand(1, 75);
            }
            $this->m[] = $z;
        }
    }
    function get (){
        echo '<table border="1">';
        for ($x = 0; $x < 5; $x++){
            echo '<tr>';
            for ($c = 0; $c <5; $c++){
                echo '<td>'.$this->m[$x][$c];
                echo '</td>';
            }
            echo '<tr>';
        }
        echo '</table>';
    }
}
$p = new table();
$p->generate();
$p->get();

/**
Sukurkite PHP skriptą, kuriame aprašykite klasę loto, kurioje būtų viena savybė ‐ $table, kuri bus dvimatis masyvas,
 * taip pat būtų metodas generate(),
 * kuris sugeneruoja 5 x 5 atsitiktinių skaičių dvimatį masyvą (min skaičius = 1, max skaičius = 75).
 * Sukurkite metodą get(),kuris išveda sugeneruotą masyvą 5 x 5 HTML lentele. Pademonstruokite veikimą.

 */