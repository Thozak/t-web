<?php
require_once "php/stranky/Stranka.php";
class Stranky
{
    public function vsechnyStranky() {
        return $this->id;
    } 
    public function vyhledejStranku($id) {
        $s = new Stranka();
        $s->setId($id);
        $s->setTitulek("testovaci titulek");
        $s->setText("testovaci text");
        
        return $s;
    }
}
?>