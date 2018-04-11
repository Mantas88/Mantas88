<?php

class a{
    function __construct(){
        echo __class__ . ' construct<br>';
    }
function __destruct(){
    echo __class__ . ' destruct<br>';
    }
}
echo '-- pries new--<br>';
$p = new a (); // egzempliorius sukuriamas: suveikia construct
echo '-- po new --<br>';
unset ($p); // egzempliorius sunaikinamas: suveikia destruct
echo '-- po unset --<br>';

//class a{
//    const aaa = 'xxx'
//    function __construct(){
//        echo __class__ . ' ' . self::aaa . ' construct<br>';
//    }
//    function __destruct(){
//        echo __class__ . ' ' . a::aaa . ' destruct<br>';
//    }
//}
//echo '-- pries new--<br>';
//$p = new a (); // egzempliorius sukuriamas: suveikia construct
//echo '-- po new --<br>';
//unset ($p); // egzempliorius sunaikinamas: suveikia destruct
//echo '-- po unset --<br>';