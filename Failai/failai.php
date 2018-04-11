<?php

//skaitymas
$f = fopen('tekstas.txt','r');
$s = fread($f, filesize('tekstas.txt'));
fclose($f);

echo $s . '<br>';

$ss = 'labas vakaras';


//rasymas
$f = fopen('tekstas2.txt','w');
fwrite ($f, $ss);
fclose($f);

// rasymas su papildymu
$f = fopen('tekstas2.txt','a');
fwrite ($f, $ss);
fwrite ($f, $ss);
fwrite ($f, $ss);
fwrite ($f, $ss);
fwrite ($f, $ss);
fclose($f);

//supaprastintas skaitymas

$s = file_get_contents('tekstas2.txt');
echo $s . '<br>';

//supaprastintas rasymas

file_put_contents('tekstas3.txt','irasyti duomenys');

//failu funkcijos
copy('tekstas3.txt','tekstas4.txt');
unlink ('tekstas3.txt');
if (!file_exists( 'aaa'))
mkdir ('aaa');
rmdir ('aaa');
$x = @rmdir ('xxx');
if ($x === false) echo 'Blogai' . '<br>';
//echo json_encode(error_get_last());
$er = error_get_last();
echo $er['message'] . '<br>';
$ar = scandir('.');
foreach ($ar as $file) {
    if ($file != '.' && $file != '..') echo $file . '<br>';
}