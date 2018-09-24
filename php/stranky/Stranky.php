<?php
require_once "php/stranky/Stranka.php";            //odkaz na stranku Stranka.php
/**
 * stará se o stránky
 **/
class Stranky                                      //vytvoření class
{
    /**
     * metoda která vyjmenue všechny stránky
     * zatím nefunkční
    **/
    public function vsechnyStranky() {            
        return $this->id;          //FIXME chyba
    } 
    /**
     * metoda která vyhlendá stránku
     * zatím nefunkční
    **/
    public function vyhledejStranku($id) {           
        $s = new Stranka();                          //vytvoření nové stránky
        $s->setId($id);
        $s->setTitulek("testovaci titulek");
        $s->setText("testovaci text");
        
        return $s;
    }
}
?>