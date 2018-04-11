<?php
$s = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<data>
<lubos hight="3">Aukstos</lubos>
<lubos hight="2">Zemos</lubos>
<lubos hight="4">vidutines</lubos>
</data>
EOT;

//echo htmlspecialchars($s);
//echo ($s);

$xml = simplexml_load_string($s);
$x = $xml->xpath("//lubos");
foreach ($x as $item){
    echo $item . '' . $item['hight'] . "<br>";
}
echo '<hr>';

$x = $xml->xpath("lubos[@hight>2]");
foreach ($x as $item) {
    echo $item . '' . $item['hight'] . "<br>";
}

$ss = $xml->asXML();
echo htmlspecialchars($ss);