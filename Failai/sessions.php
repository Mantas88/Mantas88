<?php
session_start();
if ( isset($_SESSION['skaitliukas'])) $_SESSION['skaitliukas']++;
else $_SESSION ['skaitliukas'] = 1;
echo $_SESSION['skaitliukas'];
//session_unset ();
//session_destroy();
unset ($_SESSION['skaitliukas']);



//if (isset($_SESSION['skaitliukas'])) echo $_SESSION['skaitliukas'];
//else echo 'skaitliukas dar nepradetas';