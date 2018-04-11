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
}