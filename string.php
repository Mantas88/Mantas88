<?php

echo "abc" . '<br>'; 
echo "abc\x61" . '<br>'; 
$x = 'Labas rytas';
echo "Laikrastis raso:$x" . '<br>';
echo "Laikrastis raso:{$x}" . '<br>';

$t = <<<EOD
Labas rytas!
stai ir as
EOD;

echo $t;