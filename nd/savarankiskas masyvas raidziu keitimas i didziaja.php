<?php

$a = ['asdfgghkk'];

function test ( $a ) {
    $x = [];
    foreach ($a as $value){

        $x[]= ucfirst(strtolower($value));
    }
    return $x;
}
echo json_encode(test($a));

