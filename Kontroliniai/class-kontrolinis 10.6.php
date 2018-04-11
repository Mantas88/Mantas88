<?php

class loto{
    public $m = [];
    function generate(){
        for ($n = 0; $n < 5; $n++) {
            $x = [];
            for ($b = 0; $b < 5; $b++) {
                $x[] = rand(1, 75);
            }
            $this->m[] = $x;
        }

    }

}

$p = new loto();
$p->generate();



/**
Sukurkite PHP skriptą, kuriame aprašykite klasę loto, kurioje būtų viena savybė ‐ $table, kuri bus dvimatis masyvas,
 * taip pat būtų metodas generate(),
 * kuris sugeneruoja 5 x 5 atsitiktinių skaičių dvimatį masyvą (min skaičius = 1, max skaičius = 75).
 * Sukurkite metodą get(),kuris išveda sugeneruotą masyvą 5 x 5 HTML lentele. Pademonstruokite veikimą.

 */
/**
Sukurkite PHP skriptą, kuriame aprašykite klasę lentele, kurioje būtų viena savybė ‐ $table,
kuri bus dvimatis masyvas, taip pat būtų metodas add, kurio parametras yra 3 skaičių masyvas.
Patalpinti gautą masyvą į savybės %table masyvą. Sukurkite metodą get(),
kuris paskaičiuoja kiekvienoje lentelės eilutėje esančių elementų vidurkį ir jų patalpina į eilutės pabaigą.
Išvesti savybės $table masyvą HTML lentele. Pademonstruokite veikimą.

 */