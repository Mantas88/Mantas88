<?php
$s = 'labas rytas aaa ';
echo preg_replace("/rytas/", 'vakaras', $s);
echo '<br>';
echo preg_replace("/[a,k,d]/", '*', $s);
echo '<br>';
echo preg_replace("/^(\d{4})-(\d{2})-(\d{2})/","$2/$3/$1", "2018-10-30");

