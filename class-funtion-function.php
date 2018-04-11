<?php

class c {
    private $mas = [];
    function add($name, $age, $salary) {
        $this-> mas [] = [
            'name' => $name,
            'age' => $age,
            'salary' => $salary
        ];
    }
    function info () {
        return $this->mas;
    }
}

$p = new c();
$p-> add( 'Jonas', 20, 500);
$p-> add( 'Algis', 20, 800);
$p-> add( 'Petras', 20, 700);
$p-> add( 'Vytas', 20, 600);
$p-> add( 'Andrius', 20, 900);
$p-> add( 'Mantas', 20, 400);
var_dump($p->info());
