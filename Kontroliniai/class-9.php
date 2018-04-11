<?php
class salis {
    public $pavadinimas;
    public $sostine;
    private $gyventojai = 1000;
    function __construct ($p, $s, $g){
        $this->pavadinimas = $p;
        $this->sostine = $s;
        $this->gyventojai = $g;

    function informcija (){
        $s = "%s - %s - %s <br> ";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }
}
class lengvasis extends automobilis {

    function informacija (){
        $s = "%s , %s , %s lengvasis automobilis <br> ";
        echo sprintf($s, $this->gamintojas, $this->modelis, $this->metai);
    }
}
class krovininis extends automobilis {
}
$c = new automobilis('Honda', 'Civic', '2018');
$f = new lengvasis ('Toyota', 'Auris', '2012');
$g = new krovininis ('Kablys', 'Ducato', 2013);

$c->duomenys();
$f->duomenys();
$g->duomenys();

Panaudodami prieš tai sukurtą klasę salis, sukurkite klases vakaru_salis ir rytu_salis,
kurios paveldi salis klasę. Salis klasę papildykite metodu “informacija”, kuris išvestų suformatuotą eilutę “šalis,
sostinė, gyventojai”. rytu_salis klasėje perrašykite metodą informacija,
pakeisdami išvedamą eilutę į “šalis, sostinė, gyventojai (Rytų šalis)”. Rytų šalis ‐ tiesiog paprastas tekstas.

9.3

