<?php
$cnn = new PDO('mysql:host=127.5.5.5;dbname=mokymai', 'root');
$amzius = 3000;
// taikinys nulauzimui istatant specialu teksta vietoje $kaina
$res = $cnn->query("select asm_vardas, asm_pavarde from asumuo where asm_amzius>{$amzius}");
while ($a = $res->fetch()){
    echo $a['asm_vardas'] . ' ' .$a['asm_pavarde'] . '<br>';
}

    echo '-- antras kartas --<br>';
// su apsauga nuo nulauzimo
$res = $cnn->prepare("select asm_vardas, asm_pavarde from asumuo where asm_amzius");
$x = $res->execute([':amzius' => $amzius]);
while ($a = $res->fetch()){
    echo $a['asm_vardas'] . ' ' .$a['asm_pavarde'] . '<br>';
}