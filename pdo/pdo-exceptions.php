<?php

try {
    $cnn = new PDO('mysql:host=127.5.5.5;dbname=mokymai', 'root');
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // allow exceptions
    $res = $cnn->query("select asm_vardas from asumuo");
    while ($a = $res->fetch()) {
        echo $a['asm_vardas'] . '<br>';
    }
}
catch(PDOException $err) {
    echo $err->getMessage();
}