<?php
class numberList{
    public $numbers = [];
    function add($number){
        $this->numbers [] = $number;
    }
        function delMin(){
            $min = $this->numbers[0];
            $ind = 0;
            for ($i = 0; $i < count($this->numbers); $i++){
                if ($this->numbers[$i] < $min){
                    $ind = $i;
                }
            }
            array_splice($this->numbers, $ind, 1);
    }
    function getInfo(){
        echo json_encode($this->numbers);

    }
}
$n = new numberList();
$n-> add (10);
$n-> add (2);
$n-> add (3);
$n-> add (4);
echo json_encode($n->numbers);
$n->delMin();
$n->getInfo();

//Sukurkite PHP skriptą, kuriame aprašykime klasę numberList, kurioje būtų viena savybė ‐ $numbers,
//kuri bus masyvas, taip pat būtų metodas add($number), kuris prideda naują skaičių į masyvą sąvybę $numbers.
//Sukurkite metodą delMin(), kuris pašalina mažiausią masyve sąvybėje esantį skaičių. Sukurkite funkciją getInfo(),
//kuris išveda skaičius esančius savybėje.
