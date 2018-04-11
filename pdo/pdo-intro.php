<?php
$cnn = new PDO('mysql:host=127.5.5.5;dbname=mokymai', 'root');
$sql = "select count(*) as cnt from asumuo";
$res = $cnn->query($sql);
while ($row=$res->fetch()){
    echo $row['cnt'].'<br>';
//    var_export($row);
//    var_dump($row)
}
//$res->closeCursor();
//$sql = "select * from auto";
//$res = $cnn->query($sql);
//echo '<table>';
//while ($row=$res->fetch()){
//    echo '<tr>';
//    echo '<td>' . $row['aut_gamintojas'].'</td>';
//    echo '<td>' . $row['aut_modelis'].'</td>';
//    echo '<td>' . $row['aut_metai'].'</td>';
//    echo '<td>' . $row['aut_kaina'].'</td>';
//    echo '</tr>';
//}
//echo '</table>';
//$res->closeCursor();