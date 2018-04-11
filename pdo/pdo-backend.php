<?php
$cnn = new PDO('mysql:host=127.5.5.5;dbname=mokymai', 'root');
$res = $cnn->prepare("insert into asumuo (asm_vardas, asm_pavarde, asm_amzius) values(:vardas,:pavarde,:amzius,)");
$x = $res->execute([
    ':vardas' => $_POST['var'],
    ':pavarde' => $_POST['pav'],
    ':amzius' => $_POST['amz']
]);
$sql = "select * from asumuo";

$res = $cnn->query($sql);

echo '<table>';

while ($row=$res->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['asm_vardas'] . '</td>';
    echo '<td>' . $row['asm_pavarde'] . '</td>';
    echo '<td>' . $row['asm_amzius'] . '</td>';
    echo '</tr>';
}
    echo '</table>';

//catch(PDOException $e) {
//    echo $e->getMessage();
//}
echo '<a href="pdo-frontend.html">Grizti i forma</a>';