<?php
class person {
    public $name;
    public $age;
    private $salary = 1000;
    function __construct ($n, $a, $s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
}
$darb = [];
$darb[] = new person( 'Jonas', 500, 25);
$darb[] = new person( 'Jonas', 600, 34);
$darb[] = new person( 'Jonas', 700, 31);
var_dump($darb);