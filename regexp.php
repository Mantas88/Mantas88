<?php
$s = "labas rytas";
echo preg_match("/rytas/", $s) ? 'yra' : 'nera';
    echo '<br>';
echo preg_match("/rytas/", 'labas rytas') ? 'yra' : 'nera';
    echo '<br>';
echo preg_match("/rytas/", $s) ? 'yra' : 'nera';
    echo '<br>';